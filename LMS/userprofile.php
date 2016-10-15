<!DOCTYPE html>
<html>
<?php
include 'core/init.php';
protected_page();
include 'includes/head.php';
?>
<body>
  <?php include 'includes/header.php'; ?>

  <div class="content">
    <?php
    if (logged_in() === true){
      include 'includes/widgets/loggedinwmini.php';
    }else {
      include 'includes/widgets/loginw.php';
    }
    ?>
    <div class="data-form">
      <h1 id="username"><?php echo $user_data['first_name'] ?> <?php echo $user_data['last_name'] ?></h1>
      <div class="user-data-form">
        <table>
          <tr>
            <td>
              User Name
            </td>
            <td>
              <?php echo $user_data['user_name'] ?>
            </td>
          </tr>
          <tr>
            <td>
              First Name
            </td>
            <td>
              <?php echo $user_data['first_name'] ?>
            </td>
          </tr>
          <tr>
            <td>
              Last Name
            </td>
            <td>
              <?php echo $user_data['last_name'] ?>
            </td>
          </tr>
          <tr>
            <td>
              e-Mail
            </td>
            <td>
              <?php echo $user_data['email'] ?>
            </td>
          </tr>
          <tr>
            <td>
              Gender
            </td>
            <td>
              <?php echo $user_data['gender'] ?>
            </td>
          </tr>
          <tr>
            <td>

            </td>
            <td>
              <a id="cb" href="edit.php">Edit Profile</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
