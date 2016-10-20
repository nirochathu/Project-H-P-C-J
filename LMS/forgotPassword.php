<!DOCTYPE html>
<html>
  <?php include 'core/init.php';?>
  <?php include 'includes/head.php'; ?>
  <body>
    <?php include 'includes/header.php'; ?>


    <div class="content" style="height: 464px; background-color: #f0f0f0">
    	

    	<div class="recover">
  			<form class="recoverPassword" action="sendRecoverEmail.php"  method="post" >
			    <h2> Recover Forgotten Password</h2>
			    <hr>
			    <table>
			    	<tr>
			        	<th>
			          		Email
			        	</th>
			        	<td>
			          		<input type="text" name="userEmail" value="" style="width: 164%;" required>
			        	</td>
			      	</tr>
			      	<tr> 
			      		<td></td> 
			      	</tr>
			      	<tr>
			        	<td>
			        	</td>
			        	<td>
			          		<input id="cb-rp" type="submit" name="recoverPassword" value="submit">
			        	</td>
			      	</tr>
			    </table>
			</form>
		</div>



	</div>


    <?php include 'includes/footer.php'; ?>
  </body>
</html>
