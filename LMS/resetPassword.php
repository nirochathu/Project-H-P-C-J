<!DOCTYPE html>
<html>
<?php include 'core/init.php';
include 'includes/head.php'; 
$err= $user_id=$msg=$password="";



?>
<script  type="text/javascript">
function goBack() {
    window.history.go(-1);
}
</script>
<body>
  <?php include 'includes/header.php'; ?>

  <div class="content" style="height: 455px;">


<?php 
	if (empty($_POST) === false)
	{
  		$list = array('password', 'confirm_password');
  		foreach ($_POST as $key => $value) 
  		{
    		if (empty($value) && in_array($key, $list) === true) 
    		{
      			$err ='*Marked fields are required';
    		}
 		}

 		if ($_POST['password'] !== $_POST['confirm_password']) 
 		{
      		$err = 'New password combination does not match';
    	}
    	else if(strlen($_POST['password']) < 6)
    	{
      		$err = 'Password must be greater than 6 characters';}
  			else
  			{
            $user_id= $_POST['user_id'];
            $password = md5($_POST['password']);
  			    $update_data = array(
            'password' => $password);
            reset_password ($update_data, $user_id);

              
  					//mysql_query("UPDATE `users` SET  'password'=$password  WHERE `user_id` = $user_id");
  					if (mysql_affected_rows() ==1){
  						$msg="Your Password has been changed Successfully !";
  					}
  					else{
  						$err="Something is Wrong with the Database Queries. Sorry for the inconvinience.";
  					}
  					
      				
      			}
    		}
    		
 ?>
      		
    	 <div class="password-recover-last" style="margin-left: 18%;margin-top: 32px;width: 445px;">
    	<br> <br>
      	<?php 
      	if (!empty($err)) 
      	{ ?>
      		<h2 style="color: red;" > Error  :-(</h2> <hr>
      		<?php echo $err; ?> <br> <br>
      		<a  id="cb" href="index.php">Home Page</a>
      		<a onclick="goBack()" id="cb" style="margin: 4px 15px;">Go Back</a>
      	<?php 
      	}
      	else
      	{ ?>
      		<h2 style="color: red;" > Successful !</h2> <hr>
      		<?php echo $msg; ?> <br> <br>
      		<a id="cb" href="index.php">Home Page</a> 
      	<?php } ?>
      	
    	

  		
  </div>

  </div>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
