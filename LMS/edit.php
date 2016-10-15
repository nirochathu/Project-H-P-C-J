<!DOCTYPE html>
<html>
<?php include 'core/init.php';
protected_page();
if (empty($_POST) === false){
  $list = array('user_name', 'email');
  foreach ($_POST as $key => $value) {
    if (empty($value) && in_array($key, $list) === true) {

      $errors[4] ='*Marked fields are required';
    }
  }
  if (empty($errors[4]) === true) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
      $errors[4] ='not a vaild email address';
    }else if(preg_match("/\\s/",$_POST['user_name'])){
      $errors[4] ='username must not contain spaces';
    }else if(user_exist($_POST['user_name'])){
      $errors[4] ='username alredy exist';
    }else if (empty($_POST) === false && empty($errors) === false ){
      $update_data = array(
        'user_name' => $_POST['user_name'],
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'gender' => $_POST['gender'],
      );
      update_user($update_data, $session_user_id);
      header('Location: userprofile.php');
      exit();
    }

  }
}
include 'includes/head.php'; ?>
<body>
  <?php include 'includes/header.php'; ?>
  <?php

  ?>

  <div class="content">
    <div class="data-form">
      <?php
      if (logged_in() === true){
        include 'includes/widgets/loggedinwmini2.php';
      }else {
        include 'includes/widgets/loginw.php';
      }
      ?>
    </div>

    <?php


    include 'includes/widgets/editw.php';?>
  </div>
  <div class="errors">
    <?php
    echo $errors[4];
    ?>
  </div>
  <?php include 'includes/footer.php'; ?>

</body>
</html>
