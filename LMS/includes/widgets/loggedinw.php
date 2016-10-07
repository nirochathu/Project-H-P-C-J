<div class="widget">
  <form class="login" action="logout.php" method="post">
    <table>
      <tr>
        <td>
          <h3><mini>Welcome </mini> <?php echo $user_data['first_name']; echo " "; echo $user_data['last_name'];  ?>!</h3>
          <hr>
        </td>
        <td></td>
      </tr>
      <tr>
        <td>
          <a id="cb" href="changepassword.php">Change Password</a>
        </td>
        <td>
          <a id="cb2" href="userprofile.php">Profile</a>
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
