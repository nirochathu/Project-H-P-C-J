<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/header.php';
//$user_id="";
  	$_GET ['f_name'];
  	$_GET ['l_name'];
  	$_GET ['user_id']; ?>	

  <div class="content" style="height: 455px;">

  	<div class="widget-resetPassword">
  	

    	<h3> Reset Password   <hr> </h3> 
    	<p> Now you can reset the password. <br> <br>  
    	 
    	   
    	<form class="resetPassword" action="resetPassword.php" method="post">
		    <table align="center">
		    <tr>
		    	<td>
		    		User Name 
		    	</td>
		    	<td>
		    		<?php echo $_GET ['f_name']." ".$_GET ['l_name']; ?> 
		    	</td>
		    </tr>
		      <tr>
		        <td>
		          New Password*
		        </td>
		        <td>
		          <input type="password" name="password" value="">
		        </td>
		      </tr>
		      <tr>
		        <td>
		          Confirm New Password*
		        </td>
		        <td>
		          <input type="password" name="confirm_password" value="">
		        </td>
		      </tr>
		      <tr> <td>.  </td></tr> 
		      <tr>
		        <td>
		          <input id="btn" type="submit" name="Reset" value="Reset" style="margin-left: 11px;">
		        </td>
		        <td> <input id="btn" type="button" value="Cancel" onclick="window.location.href='index.php'"></td>
		      </tr>
		    </table>
  		</form>

      	
    	
      	
    	<br>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>		

</body>
</html>