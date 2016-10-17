<?php
//return the access type
function access($user_id, $type){
  $user_id = (int)$user_id;
  $type = (int)$type;
  return (mysql_result(mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `user_id` = $user_id AND `type` = $type"), 0) == 1)? true : false;
}

function admin_button(){
  global $user_data;
  if(access($user_data['user_id'], 100) == true){
    return true;
  }else{
     return false;
   }
 }
 
//if type not the admin type redirect to index.php
function admin_only(){
  global $user_data;
  if (access($user_data['user_id'], 100) == false){
    header('Location: index.php');
    exit();
  }
}

//if type not the admin type or teacher type redirect to index.php
function teacher_only(){
  global $user_data;
  if (access($user_data['user_id'], 70) == false){
    if (access($user_data['user_id'], 100) == false){
      header('Location: index.php');
      exit();
    }

  }
}

//validate array data for the edit user form
function array_validate(&$data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  $data = mysql_real_escape_string($data);
}

//validate data for other inputs
function sanitize  ($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  $data = mysql_real_escape_string($data);
  return $data;
}

//only registerd members can access
function protected_page(){
  if (logged_in() === false){
    header ('Location: ruonly.php');
    exit();
  }
}


function logged_in_redirect(){
  if (logged_in() === true){
    header('Location: index.php');
  }

}
?>
