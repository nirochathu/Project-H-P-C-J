<div class="widget">
  <form class="login" action="logout.php" method="post" style="width: 272px;">
    <h3><mini>Welcome </mini> <?php echo $user_data['first_name']; echo " "; echo $user_data['last_name'];  ?>!</h3>
    <hr style="width: 96%;margin-left: -4px;">
    <table>
      <tr>
        <td>

           <div onclick="location.href='admin.php'" class="img1" style="margin-left: 49px;margin-top: 7px;">
            <img src="includes/Images/settings.png" style="width: 45px;height: 43px;" alt="Logout">
            <p class="descri" style="margin-top: -1px;margin-left: -9px;font-size: 10px;"> Control Panel</p>
          </div>

        </td>
        <td>
          <div onclick="location.href='logout.php'" class="img1" style="margin-left: 12px;margin-top: 10px;">
            <img src="includes/Images/logout.png" style="width: 45px;height: 43px;" alt="Logout">
            <p class="descri" style="margin-top: -6px;margin-left: 9px;font-size: 10px;"> Logout</p>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div  onclick="location.href='userprofile.php'" class="img1" style="margin-left: 130px;margin-top: -63px;">
            <img src="includes/Images/myprofile.png" style="width: 37px;height: 36px;" alt="View Profile">
            <p class="descri" style="margin-top: -2px;margin-left: -7px;font-size: 10px;">View Profile</p>
          </div>
        </td>
      </tr>
    </table>
  </form>
</div>
