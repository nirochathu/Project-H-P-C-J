<!DOCTYPE html>
<html>
  <?php include 'core/init.php';?>
  <?php include 'includes/head.php'; ?>
  <body>
    <?php include 'includes/header.php'; ?>

    <div class="content">

    <div class="front-wide">
      <?php
      if (logged_in() === true){
        include 'includes/widgets/loggedinw.php';
      }else {
        include 'includes/widgets/loginw.php';
      }
      ?>

      </div>

      <h1> Leadership Page</h1>
      </div>


<?php include 'includes/footer.php'; ?>
  </body>
</html>