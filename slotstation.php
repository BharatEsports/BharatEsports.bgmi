

<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: login.php");
}else{
   $name = $_SESSION['user'][2];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bharat Esports</title>

    <meta charset="utf-8">
    <meta name="language" content="en-us" />
    <meta http-equiv="Content-Type" content="text/html" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="distribution" content="Global" />
    <meta http-equiv="Cache-control" content="public">
    <meta name="robots" content="index, follow" />

    <meta name="copyright" content="Bharat Esports" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    

    
    <meta itemprop="name" content="Bharat Esports">

    <link rel="shortcut icon" href="./images/titlelogo.png" type="image/png" />

    <!--css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
    <!--css-->

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Days+One" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Paytone+One" />

</head>

<body>
    <div class="header" id="top">
        <nav class="navbar navbar-default">
            <div class="navbar-header">

            <img src="./images/IMG_7915.PNG" alt="Logo" class="logoname">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- nav bar collapse -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                <ul class="nav navbar-nav">
                        <li><i class="fas fa-user"></i> <?php echo $name ?></span></li>
                        <li><a href="./players.php">Previous Winners</span></a></li>
                        <li><a href="./ongoing.php">Ongoing Tournments</span></a></li>
                        <li><a href="./upcoming.php">Upcoming Tournments</span></a></li>
                        <li><a href="./contact.php">Contact us</span></a></li>
                        <li><a href="./about.php">About us</span></a></li>
                        <li><a href="logout.php">Logout</a></span></a></li>
                    </ul>
                </nav>
            </div>

        </nav>
    </div>
    <div class="cplayers" >
      <div class="playerrow" >
          <h2 class="tittle5" style="font-family: Days One; align-items: center; ">SLOT STATION</h2>
         
      </div> 
  </div>

  <div class="image-containerpoints">
    <img src="./images/points/slot1.jpg" alt="Image 1">
    <img src="./images/points/slot2.jpg" alt="Image 2">
    <!-- Add more images if needed -->
  </div>


  <div class="cplayers" >
    <div class="playerrow" >
       
        <a href="./main.php"><div class="back-button" style="color: #fff; font-family: Days One;">
          <i class="fas fa-home"></i> Home
      </div></a>
    </div>

    
</div>

    

  


    <div class="footer">
        <div class="left-column1">
          <div class="copyright-symbol"></div>
          <div> &#169; All Rights Reserved</div>
        </div>
        <div class="left-column1">
            <div> About Us   </div>
        </div>
        <div class="left-column1">
            <div>Term & Conditions</div>
        </div>
         
        <div class="middle-column">
           

            <div class="social-media-icons">
              <a href="https://m.facebook.com/profile.php?id=61553004870661&ref=xav_ig_profile_page&_rdr" target="_blank"><div class="social-media-icon">
                <i class="fab fa-facebook" aria-hidden="true" class="socialicon123" style="color: #1877F2;"></i>
              </div></a>
              <a href="" target="_blank"><div class="social-media-icon">
                <i class="fab fa-twitter" aria-hidden="true" class="socialicon123" style="color: #1DA1F2;"></i>
              </div></a>
              <a href="https://instagram.com/shankaacademy?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><div class="social-media-icon">
                <i class="fab fa-instagram" aria-hidden="true" class="socialicon123" style="color: #cd486b;"></i>
              </div></a>
              <a href="https://www.linkedin.com/company/shanka-educational-academy/" target="_blank"><div class="social-media-icon">
                <i class="fab fa-linkedin" aria-hidden="true" class="socialicon123" style="color: #0077b5;"> </i>
              </div></a>
              <a href="https://www.linkedin.com/company/shanka-educational-academy/" target="_blank"><div class="social-media-icon">
                <i class="fab fa-whatsapp" aria-hidden="true" class="socialicon123" style="color:  #08e63f;"> </i>
              </div></a>
            </div>
          </div>
    
        
      </div>  

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var navbarToggle = document.querySelector('.navbar-toggle');
            var navbarCollapse = document.querySelector('.navbar-collapse');

            navbarToggle.addEventListener('click', function () {
                navbarCollapse.classList.toggle('show');
            });
        });
    </script>

</body>

</html>








