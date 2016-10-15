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
      include 'includes/widgets/loggedinw.php';
    }else {
      include 'includes/widgets/loginw.php';
    }
    ?>

    <div class="pro-pic">

    </div>

    <h1 id="username"><?php echo $user_data['first_name'] ?> <?php echo $user_data['last_name'] ?></h1>
    <div class="user-data-form">
      <form class="" action="index.html" method="post">
        <table>
          <tr>
            <td>
              User Name*
            </td>
            <td>
              <input type="text" name="user_name" value="">
            </td>
          </tr>
          <tr>
            <td>
              First Name
            </td>
            <td>
              <input type="text" name="first_name" value="">
            </td>
          </tr>
          <tr>
            <td>
              Last Name
            </td>
            <td>
              <input type="text" name="last_name" value="">
            </td>
          </tr>
          <tr>
            <td>
              e-Mail*
            </td>
            <td>
              <input type="text" name="email" value="">
            </td>
          </tr>
          <tr>
            <td>
              Gender
            </td>
            <td>
              <input type="text" name="gender" value="">
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td>
              <input id="cb" type="button" name="submit" value="Save Changes">
            </td>
          </tr>
        </table>
      </form>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>
</body>
</html>
