<!DOCTYPE html>
<html>

<?php include 'core/init.php';

protected_page();
admin_only();
$user_id =$_GET['user_id'];
$msg = $err ="";
include 'includes/head.php';
?>

<body>
  <?php include 'includes/header.php'; ?>

  <div class="content">
    <?php
    if (logged_in() === true){
      include 'includes/widgets/loggedinwmini2.php';
    }else {
      include 'includes/widgets/loginw.php';
    }
    ?>
    <?php
    delete_user($user_id);

    if (!empty($err))
    { ?>
      <h2 style="color: red;" > Error  :-(</h2> <hr>
      <?php echo $err; ?> <br> <br>
      <a  id="cb" href="index.php">Home Page</a>
      <a onclick="goBack()" id="cb" style="margin: 4px 15px;">Go Back</a>
      <?php }else
      { ?>
        <div class="add-user">
          <h2 style="color: red;" > Successful !</h2> <hr>
          <?php echo $msg; ?> <br> <br>
          <a id="cb" href="admin.php">< Go Back</a>
        </div>
        <?php } ?>
      </div>

      <?php include 'includes/footer.php'; ?>
    </body>
    </html>
