<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    // header("Location: indexWithList.php");
    header("Location: index_My.html");
    exit();
}

// Get the username from the session

$loggedIn = isset($_SESSION['username']);
$username = $_SESSION['username'];
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- /Users/tahirawan/Desktop/Web2024_Tahir/Tahir_Portfolio_Root/css/estilos.css -->
		  
	<title>


		HomePage

	</title>
	<Style>



    .navbar-default .navbar-nav > li > a {
          color: white;
    }
    .navbar-default .navbar-brand {
          color: white;
    }


        ::-webkit-scrollbar {
          display: none;
        }

        ::-webkit-scrollbar-button {
          display: none;
        }

        body {
          -ms-overflow-style:none;
        }


    </Style>

    
</head>
<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        


        <nav class="navbar navbar-default" style="background-color: #0000FF;">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="#">
                <!-- <img style="max-width:40px; max-height: 40px; margin-top: -7px;"
             src="images/WebLogo.png"> -->

             BIGBANG STUDIOS
              </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="contact/index.html">Contact</a></li>
                <li><a href="section1/index.html">Section1</a></li>
                <li><a href="section2/index.html">Section2</a></li>

                <?php if ($loggedIn): ?>
                <li><a>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> !</a></li>
                <li><a href="logout.php">Logout</a></li>
                <!-- <li><a href="logout.php">Logout</a></li> -->
                <!-- If the user is not logged in, show the login button -->
                <?php else: ?>
                <li><a href="indexWithList.php">Login</a></li>
                <?php endif; ?>
              </ul>
              
            </div>
          </div>
        </nav>








    <div class=".container-fluid">
        <div class="section" style="background-image: url('images/Font3.png');" id="section1">
            

            <div class="d-flex align-items-center justify-content-center" style="height: 500px;">

                
                <h1 class="display-4 text-center">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</h1>
                <img src="images/WebLogo.png" class="rotating-image" id="rotatingImage">
                <img src="images/WebLogo.png" class="rotating-image1" id="rotatingImage1">
                <img src="images/WebLogo.png" class="rotating-image2" id="rotatingImage2">
                <img src="images/WebLogo.png" class="rotating-image3" id="rotatingImage3">
                    
                    
                

            </div>

        </div>
        <div class="section" style="background-image: url('images/packaging.png');" id="section2">
            

            <h1 class="display-4 text-center">Our Services</h1>

            <h3 class="display-4 text-center"> 🖥️ App Development  💻 , 3D , Animation , Vfx </h3>
                    
        </div>

        
    </div>


<!--  way of going behind to parent folder -->
<!-- <li><a href="../contact/index.html">Contact</a></li> -->



	<!-- <p><b>Bienvenidos</b></p>
    <p>Second Page <b> Diseño y Animacion Digital</b>.</p>
	<p>All in English</p>

    <ul>
        
        <a href="https://www.w3schools.com/">Visit W3Schools.com!</a>
        <li type="circle"> Esto es un tipo de punto.</li>
        <li type="square"> Esto es otro.</li>
        <li type="disc"> Y esto es otro diferente.</li>
    </ul> -->
        <!-- <iframe frameborder="0" src="https://itch.io/embed/3053819" width="552" height="167"><a href="https://tahirawan.itch.io/rappicargame">RappiCarGame by TahirAwan</a></iframe> -->



        <div class="responsive-embed">
    <iframe frameborder="0" src="https://itch.io/embed-upload/11903743?color=0011e3" allowfullscreen="" style="width: 100%; height: 100vh; border: none;"><a href="https://tahirawan.itch.io/rappicargame">Play RappiCarGame on itch.io</a></iframe>
</div>

<div class="responsive-embed">
<iframe frameborder="0" src="https://itch.io/embed-upload/12144255?color=0484d1" allowfullscreen="" style="width: 100%; height: 100vh; border: none;"><a href="https://tahirawan.itch.io/tomas">Play Tomas on itch.io</a></iframe>
</div>
   
<div class="responsive-embed">
   <iframe frameborder="0" src="https://itch.io/embed-upload/12144377?color=333333" allowfullscreen="" style="width: 100%; height: 100vh; border: none;"><a href="https://tahirawan.itch.io/snowboy">Play SnowBoy on itch.io</a></iframe>
</div>

    <!-- <iframe frameborder="0" src="https://itch.io/embed-upload/11787387?color=0b4001" allowfullscreen="" width="2048" height="1044"><a href="https://tahirawan.itch.io/rappicargame">Play RappiCarGame on itch.io</a></iframe> -->

<footer class="footer1">




    <div>
        <p>                 </p><br>
    </div>


    <div class="container">

    <div class="row"><!-- row -->
            
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Contacto</h1>
                                
                                <ul>
                                    <li><a  href="section2/index.html"><i class="fa fa-angle-double-right"></i> About Us</a></li>
                                    <li><a  href="contact/index.html"><i class="fa fa-angle-double-right"></i> Contact Us</a></li>
                                </ul>
                    
                            </li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                
               
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Nuestro Servicios</h1>
                                
                                <ul>


                                <li><a href="#"><i class="fa fa-angle-double-right"></i> App Development</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Animation</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> 3D Modelling</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Augmented Reality</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Virtual Reality</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>  Android Apps</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i>  Web Development</a></li>

                                </ul>
                    
                            </li>
                            
                        </ul>
                         
                      
                </div><!-- widgets column left end -->
                
                
                <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                
                   
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                            <li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">Direcion </h1>
                                
                                <div class="footerp"> 
                                
                                <h2 class="title-median">BIGBANG STUDIOS</h2>
                                <p><b>Email id:</b> <a href="mailto:tahirawanarg@gmail.com">tahirawanarg@gmail.com</a></p>
                                <p><b>Helpline Numbers </b>

                                <b style="color:#ffc106;">(8AM to 10PM):</b>  +5491127108329  </p>
    
   
                                </div>
                                
                                <div class="social-icons">
                                
                                    <ul class="nomargin">
                                    
                                        <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                                        <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                                        <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                                        <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                    
                                    </ul>
                                </div>
                            </li>
                          </ul>
                       </div>
                </div>
</div>
</footer>


<script>
    $(window).on('scroll', function() {
      var scrollTop = $(this).scrollTop();
      $('#rotatingImage').css({
        'transform': 'translate(-50%, -50%) rotate(' + scrollTop + 'deg)'
      });



      $('#rotatingImage1').css({
        'transform': 'translate(-50%, -50%) rotate(' + scrollTop + 'deg)'
      });


      $('#rotatingImage2').css({
        'transform': 'translate(-50%, -50%) rotate(' + scrollTop + 'deg)'
      });


      $('#rotatingImage3').css({
        'transform': 'translate(-50%, -50%) rotate(' + scrollTop + 'deg)'
      });
    });
  </script>


</body>

</html>



