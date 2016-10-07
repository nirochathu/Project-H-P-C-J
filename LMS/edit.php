<!DOCTYPE html>
<html>
<?php include 'core/init.php';
protected_page();
if (empty($_post) === false){
  $list = array('user_name', 'email');
  foreach ($_POST as $key => $value) {
      if (empty($value) && in_array($key, $list) === true) {
        $errors[2] ='*Marked fields are required';
        break 1;
      }
  }
  if (empty($errors[2]) === true) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
        $errors[2] ='not a vaild email address';
    }else if(preg_match("/\\s/",$_POST['username'])){
        $errors[2] ='username must not contain spaces';
    }else if(user_exist($_POST['username'])){
        $errors[2] ='username alredy exist';
    }
  }
}
include 'includes/head.php'; ?>
<body>
  <?php include 'includes/header.php'; ?>

  <div class="content">
    <?php
    if (logged_in() === true){
      include 'includes/widgets/loggedinw.php';
    }else {
      include 'includes/widgets/loginw.php';
    }
    ?>

      <?php
        include 'includes/widgets/editw.php';
      ?>
  </div>
  <div class="errors">
    <?php echo $errors[2]; ?>
  </div>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
