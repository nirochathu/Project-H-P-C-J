<!DOCTYPE html>
<html>
<?php include 'core/init.php';?>
<?php include 'includes/head.php'; ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"></head>

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
      <div class="featured-front">


        <div class="featured1">
          <div id="count-container" class="positioning-text">
            <p> <strong> <span class="no-bold">#1 in the World</span></strong><br />
              <span class="no-bold">for graduate employability</span> </p>


              <div class="homepage-headline">
                <span class="yellow">ideas</span> that change<br /> the world</div>
              </div>
            </div>

          </div>
          <div class="featured2">
            <p id="featured2 "> LEARN ABOUT OUR...
              <div class="item-list">
                <ul>
                  <li>  <a class="visit" href="history.php"> <img   id="list-img1" src="includes/Images/history.jpg"> </a>  <a class="visit" href="history.php"> <span  id="list-span1">History </span> </a>  </li>
                  <li> <a class="visit" href="strategicPlans.php"> <img id="list-img2" src="includes/Images/plan.jpg"> </a> <a class="visit" href="strategicPlans.php"> <span id="list-span2">Strategic Plans </span> </a> </li>
                  <li> <a class="visit" href="community.php"> <img id="list-img3" src="includes/Images/community.png" style="
                    width: 49px; height: 48px; border-radius: 50px; margin-left: 47px; margin-top: 5px;"> </a> <a class="visit" href="community.php"> <span id="list-span3">Community</span> </a></li>
                    <li> <a class="visit" href="leadership.php"> <img id="list-img4" src="includes/Images/leadership.jpg" style="width: 49px; height: 48px; border-radius: 50px; margin-left: 47px; margin-top: 5px;"> </a> <a class="visit" href="leadership.php"> <span id="list-span4">Leadership</span> </a> </li>

                  </ul>
                </div>
              </p>
            </div>
          </div>
          <div class="iframe">
          <div class="slideshow-container">
              <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="includes/Images/slide1.jpg" style="width: 960px;height: 320px;">
                  <div class="text">Slide 1 </div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="includes/Images/slide2.jpg" style="width: 960px;height: 320px;" >
                <div class="text">Slide 2</div>
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="includes/Images/slide3.jpg" style="width: 960px;height: 320px;">
                <div class="text">Slide 3</div>
              </div>

          </div>
          </div>
                <br>

            <div style="text-align:center">
              <span class="dot"></span>
              <span class="dot"></span>
              <span class="dot"></span>
            </div>

          <div class="bor-main">

            <div class="bor"> <img id="img1" src="includes/Images/border.png">

              <p id="front-bor"><span><b>LMS of University of Westeros  is students' virtual learning experience. UOW is committed to maintaining the highest academic standards and quality of degree programmes compete with students all around the globe . University of Westeros is home to world-changing research and inspired teaching. <b></span></p>

                <img id="img2" src="includes/Images/border.png"> </div>
              </div>
            </div>

            <?php include 'includes/footer.php'; ?>

            <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("dot");
                    for (i = 0; i < slides.length; i++) {
                       slides[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex> slides.length) {slideIndex = 1}
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    setTimeout(showSlides, 10000); // Change image every 10 seconds
                }
                </script>
          </body>
          </html>
