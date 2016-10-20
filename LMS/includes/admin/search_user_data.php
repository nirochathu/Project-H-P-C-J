<h1 id="username">Search User</h1>
<div class="user-data-form">
  <table>
      <tr>
        <td style="color:red;">
          User ID
        </td>
        <td style="color:red;">
          <?php echo $returndata['user_id'] ?>
        </td>
      </tr>
      <tr>
        <td style="color:red;">
          User Name
        </td>
        <td style="color:red;">
          <?php echo $returndata['user_name'] ?>
        </td>
      </tr>
      <tr>
        <td>
          First Name
        </td>
        <td>
          <?php echo $returndata['first_name'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Last Name
        </td>
        <td>
          <?php echo $returndata['last_name'] ?>
        </td>
      </tr>
      <tr>
        <td>
          e-Mail
        </td>
        <td>
          <?php echo $returndata['email'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Gender
        </td>
        <td>
          <?php echo $returndata['gender'] ?>
        </td>
      </tr>
      <tr>
        <td>
          Account Type
        </td>
        <td>
          <?php echo $returndata['type'] ?>
        </td>
      </tr>
      <tr>
        <td>

        </td>
        <td>
          <?php echo("<a id="."cb"." href="."delete.php?user_id=" .$returndata['user_id'] .">Delete User</a>");?>
          <?php if($returndata['active'] == 1){
            echo("<a id="."cb"." href="."ban.php?user_id=" .$returndata['user_id'] .">Ban User</a>");
          }else{
            echo("<a id="."cb"." href="."active.php?user_id=" .$returndata['user_id'] .">Active User</a>");
          }?>
        </td>
      </tr>
    </form>
  </table>
</div>
</body>
</html>
