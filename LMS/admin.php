<!DOCTYPE html>
<html>
<?php include 'core/init.php';
protected_page();
admin_only();
if (empty($_POST) === false){
  if($_POST['form_no'] == 1){
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
      }else if(user_exist($_POST['user_name']) && $user_data['user_name'] !== $_POST['user_name']){
        $errors[4] ='username alredy exist';
      }else if (empty($_POST) === false && empty($errors) === false ){
        $update_data = array(
          'user_name' => $_POST['user_name'],
          'first_name' => $_POST['first_name'],
          'last_name' => $_POST['last_name'],
          'email' => $_POST['email'],
          'gender' => $_POST['gender'],
          'type' => $_POST['type']
        );
        add_user($update_data, $session_user_id);
        header('Location: admin.php');
        exit();
      }
    }
  }else if($_POST['form_no'] == 2){
    $username = $_POST['user_name'];
    if (empty($username) == true) {
      $errors[4] = '*Enter username to shearch';
    }else{
      $returndata = array();
      $returndata = user_data_from_username($username,'user_id', 'user_name', 'first_name', 'last_name', 'email', 'gender', 'type', 'active');

    }
  }else if($_POST['form_no'] == 3){
    echo 'ok';
    die();
  }
}
include 'includes/head.php'; ?>
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
    <div class="add-user" style="position: relative;top: 100px;">
      <?php include 'includes/admin/add_user.php';?>
    </div>
    <div class="delete-user" style="position: relative;top: 100px;">
      <?php
      if (empty($returndata) === true){
        include 'includes/admin/delete_user.php';
      }else{
        include 'includes/admin/search_user_data.php';
      }?>
    </div>
  </div>
  <div class="errors-add-user">
    <?php
    echo $errors[4];
    ?>
  </div>
  <?php include 'includes/footer.php'; ?>

</body>
</html>
