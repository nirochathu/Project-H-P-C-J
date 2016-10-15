
<h1 id="username"><?php echo $user_data['first_name'] ?> <?php echo $user_data['last_name'] ?></h1>
<div class="user-data-form">
  <form class="edit" action="edit.php" method="post">
    <table>
      <tr>
        <td>
          *User Name
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
          *e-Mail
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
          <input id="cb" type="submit"  value="Save Changes">
        </td>
      </tr>
    </table>
  </form>
</div>
</div>
</body>
</html>
