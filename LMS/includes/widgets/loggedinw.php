<div class="widget">
  <form class="login" action="logout.php" method="post">
    <h3><mini>Welcome </mini> <?php echo $user_data['first_name']; echo " "; echo $user_data['last_name'];  ?>!</h3>
    <hr>
    <table>
      <tr>
        <td>
          <a id="cb" href="userprofile.php">View Profile</a>
        </td>
        <td>
          <?php
          if($user_data['type'] == 100){
            echo('<a id="cb" href="admin.php">Admin Panel</a>');
          }?>
        </td>
      </tr>
      <tr>
        <td>
          <a id="cb" href="logout.php">Logout</a>
        </td>
      </tr>
    </table>
  </form>
</div>
