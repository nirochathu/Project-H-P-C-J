<!DOCTYPE html>
<html>
<?php  
require 'email/class.phpmailer.php'; // path to the PHPMailer class
require 'email/class.smtp.php';

 $conn=mysql_connect('localhost','root','');
 mysql_select_db('lms');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function check_email(){
	$email = $_POST['userEmail'];
	$query = mysql_query("SELECT COUNT(`email`) FROM `users` WHERE `email` = '$email' ");
	return (mysql_result($query, 0) == 1) ? true : false;
}

$emailErr= $query= "";

if (empty($_POST["userEmail"])) 
{
    $emailErr = " Valid Email Address is required...!";

} 
elseif (!empty($_POST["userEmail"]))
{
    $email = test_input($_POST["userEmail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format. Please Try Again..!";

    }
 	elseif (check_email())
	{
		$conn = new mysqli('localhost', 'root', '', 'lms');
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		} 
		$sql = "SELECT user_id, first_name,last_name FROM users WHERE email='$email' ";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0)
		{
    		// output data of each row
    		while($row = $result->fetch_assoc()) 
    		{
    			$f_name= ($row["first_name"]);
    			$l_name= ($row["last_name"]);
          $user_id = ($row["user_id"]);
  			}
		} 

			   require("email/PHPMailerAutoload.php"); // path to the PHPMailerAutoload.php file.
 
			   $mail = new PHPMailer();
			   $mail->IsSMTP();
			   $mail->Mailer = "smtp";
			   $mail->Host = "ssl://smtp.gmail.com";
			   $mail->Port = "465"; // 8025, 587 and 25 can also be used. Use Port 465 for SSL.
			   $mail->SMTPAuth = true; // turn on SMTP authentication
			   $mail->SMTPSecure = 'tls';
			   $mail->Username = "westeros.lms@gmail.com";
			   $mail->Password = "university@lms";
			    
			   $mail->From     = "westeros.lms@gmail.com";
			   $mail->FromName = "Ashan Randika";
			   $mail->AddAddress($email);
			   $mail->AddReplyTo("westeros.lms@gmail.com", "IT Administrator");
			 
			   $mail->Subject  = "Reset Password";
			   $mail->Body     = "<html> <head> <title> Reset Password </title> </head>
         <body>
         Please click the below link to go to reset the password Page. <br>
                            <br>
                            <a href=http://localhost/lms/passwordResetForm.php?f_name=$f_name&l_name=$l_name&user_id=$user_id> Reset Password </A> 

                   </body> </html>" ; 
         $mail->IsHTML(true);       // <=== call IsHTML() after $mail->Body has been set.
			   $mail->WordWrap = 50;  
			 
			   if(!$mail->Send()) 
			   	{
					$emailErr= 'Message was not sent.';
					exit;
   			 	} 			
   				else 
   				{
   					$message = 'Password Reset Link has been sent your email address Successfully';
   				}
	} 
	else 
	{
		$emailErr= "No such User Found on the email you entered, Try again by Entering a valid email !";
	}

	
}

include 'includes/head.php'; ?>
<body>
  <?php include 'includes/header.php'; ?>

  <div class="error-content" style="height: 455px;">


  <div class="errors-passwordRecover" style="position: absolute;top: 196px;left: 25%;color: black;font-family: 'Titillium Web', sans-serif;">
  	
  	

    <?php 
    if (!empty($emailErr))
    { ?>

    	<h2 style="color: red;" > Error</h2> <hr>
    	<?php echo $emailErr; ?> <br> <br>
    	<a id="cb" href="index.php">Home Page</a>
      	<a id="cb" href="forgotPassword.php" style="margin: 4px 15px;">Go Back</a>
    	
      	<?php
    }
    else
    { ?>
    	<h2 style="color: red;" > Successful !</h2> <hr>
    	<?php echo $message ; ?>
    	<br> <br><a id="cb" href="index.php" >Home</a>
    	<?php
    }
   ?>
    <br>


    </div>
  </div>
  <?php include 'includes/footer.php'; ?>		

</body>
</html>