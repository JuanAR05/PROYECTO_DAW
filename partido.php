<!DOCTYPE html>
<html lang="en">

<head>
<title> PlayFut</title>
<link rel="shortcut icon" href="images/logo2.png" mce_href="images/logo2.png" type="image/x-icon" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styleSidebar.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>




</head>

<body>
<?php 
  session_start();
  if(isset($_GET["logout"])){
    session_destroy();
  }

?>


    <header class="site-navbar " role="banner">


        <div style="color: white;">
                <?php
                include("php/bdPlayfut.php");
                  if(isset($_SESSION['usuario'])){
                    $user = $_SESSION['usuario'];
                    $select1 = "SELECT * FROM USUARIO WHERE NOMBRE_USUARIO = '".$user."';";
                    if ($valor = $conexion->query($select1)){
                      while($columna=$valor->fetch_assoc()){
                      
                  echo('<nav class="sidebar close">
                  <header>
                      <div class="image-text">
                        <a href = "http://localhost/PROYECTO_PLAYFUT/soccer-master/index.php">
                          <span class="image">
                            <img src="images/logo_usuario/Logo.png" alt="Logo">
                          </span>
                        </a>
                        <div class="text header-text">
                        <a href = "http://localhost/PROYECTO_PLAYFUT/soccer-master/index.php">
                          <span class="name">PLAYFUT</span></a>
                          <span class="profession">'.$columna['NOMBRE_USUARIO'].'</span>
                        </div>
                      </div>
                      <i class="bx bx-chevron-right toggle"></i>
                  </header>
                  <div class="menu-bar">
                      <div class="menu">
                          <ul class="menu-links">
                              <li class="nav-link">
                                  <a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/user.php">
                                      <i class="bx bx-user icon"></i>
                                      <span class="text nav-text">'.$columna['NOMBRE_USUARIO'].'</span>
                                  </a>
                              </li>
                              <li class="nav-link">
                              <a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/reserva.php">
                                  <i class="bx bx-calendar icon"></i>
                                  <span class="text nav-text">Reserva</span>
                              </a>
                          </li>
                          <li class="nav-link">
                              <a href = "http://localhost/PROYECTO_PLAYFUT/soccer-master/partido.php">
                                  <i class="bx bx-football icon" ></i> 
                                 <span class="text nav-text">Partido</span>
                              </a>
                          </li>
                          <li class="nav-link">
                              <a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/contact.php">
                                  <i class="bx bx-phone icon"></i>
                                  <span class="text nav-text">Contacto</span>
                              </a>
                          </li>
                          </ul>
                      </div>
                      <div class="bottom-content">');
                      echo ('
                          <li class="">
                              <a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/index.php?logout=true">
                                  <i name="test" class="bx bx-log-out icon"></i>
                                  <span class="text nav-text">Logout</span>
                              </a>
                          </li>
                      </div>
                  </div>
              </nav>
              ');
                       
                  }}
                  }else{
                    echo('
        <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo_usuario/Logo.png" alt="Logo">
                </span>

                <div class="text header-text">
                    <span class="name">PLAYFUT</span>
                    <span class="profession"></span>
                </div>
            </div>
            <i class="bx bx-chevron-right toggle"></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/register.php">
                            <i class="bx bx-calendar icon"></i>
                            <span class="text nav-text">Reserva</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href = "http://localhost/PROYECTO_PLAYFUT/soccer-master/php/register.php">
                            <i class="bx bx-football icon" ></i> 
                           <span class="text nav-text">Partido</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/contact.php">
                            <i class="bx bx-phone icon"></i>
                            <span class="text nav-text">Contacto</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/register.php">
                        <i class="bx bx-log-in icon"></i>
                        <span class="text nav-text">Login</span>
                    </a>
                </li>
            </div>
        </div>
        </nav>');
                  }
                
                  ?>
                
        </div>    
      
    </header>

<div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Partidos</h1>
             <a href="php/alistarse_partido.php" class="btn btn-primary py-3 px-4 mr-3">Alistarse </a>
            <p>Apuntate a partidos para jugar con otros jugadores</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Partidos</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta"></span>
                  <h3 class="m-0">Partido 1</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta"></span>
                  <h3 class="m-0">Partido 2</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta"></span>
                  <h3 class="m-0">Partido 3</h3>
                </div>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="video-media">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta"></span>
                  <h3 class="m-0">Partido 4</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta"></span>
                  <h3 class="m-0">Partido 5</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <span class="meta"></span>
                  <h3 class="m-0">Partido 6</h3>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>


    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
                <li><a href="#">Club News</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">RSS</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
                <li><a href="#">Payment and Prices</a></li>
                <li><a href="#">Contact &amp; Booking</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coupon</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
                <li><a href="#">World Cup</a></li>
                <li><a href="#">La Lega</a></li>
                <li><a href="#">Hyper Cup</a></li>
                <li><a href="#">World League</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

        <div class="row text-center">
          <div class="col-md-12">
            <div class=" pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart"
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div>
  <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <script src="js/scriptUsuario.js"></script>


  <script src="js/main.js"></script>

</body>

</html>