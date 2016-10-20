<div class="widget-mini">
  <form class="login-mini" method="post" style="width: 330px;height: 60px;">
    <h3 style="font-size:0.8em;"><mini>Logged in as : </mini> <?php echo $user_data['user_name']; ?></h3>
        <div  onclick="location.href='userprofile.php'" class="img1" style="padding-left: 2px;position: static;margin-left: 205px;margin-top: -28px;"">
        	<img src="includes/Images/myprofile.png" style="width: 37px;height: 36px;" alt="View Profile">
        	<p class="descri" style="margin-top: -2px;margin-left: -7px;font-size: 10px;">View Profile</p>
        </div>

        <div onclick="location.href='logout.php'" class="img1" style="margin-left: 267px;margin-top: -66px;">
        	<img src="includes/Images/logout.png" style="width: 45px;height: 43px;" alt="Logout">
        	<p class="descri" style="margin-top: -6px;margin-left: 9px;font-size: 10px;"> Logout</p>
        </div>
</div>
