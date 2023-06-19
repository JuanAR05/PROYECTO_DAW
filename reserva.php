<!DOCTYPE html>
<html lang="en">

<head>
<title> PlayFut</title>

  <link rel="shortcut icon" href="images/logo2.png" mce_href="images/logo2.png" type="image/x-icon" />
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
                      <a href =  "http://localhost/PROYECTO_PLAYFUT/soccer-master/index.php">
                      <span class="image">
                          <img src="images/logo_usuario/Logo.png" alt="Logo">
                      </span>
                      
          
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
            <h1 class="text-white">Reservar</h1>
            <p>Reserva tu pista en el area de sevilla, y desmuestra a tus amigos quien es el mejor</p>
            <a href="http://localhost/PROYECTO_PLAYFUT/soccer-master/php/reserva.php" class="btn btn-primary py-3 px-4 mr-3">Reserva Ya</a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-dark">
      <div class="container">

        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Pistas de Futbol</h2>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo1.png" alt="Image"><hr>
                        <h3>Centro Deportivo Santa Justa Fútbol</h3>
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.855861215282!2d-5.979867584837436!3d37.393240879830735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126eaf417f2c59%3A0xb67a19503ccd5ee3!2sCentro%20Deportivo%20Santa%20Justa%20F%C3%BAtbol!5e0!3m2!1ses!2ses!4v1639741594539!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                     
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center widget-vs-contents mb-4">
                  <p>
                    <a href="php/reserva.php" class="btn btn-primary py-3 px-4 mr-3">Inscribirse</a>
                  </p>
                </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo1.png" alt="Image"><hr>
                        <h3>Centro Deportivo José López Soto</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.7564179924334!2d-5.971520284836625!3d37.41923187982575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd12694475edbbff%3A0x39834dc5161a51f8!2sCentro%20Deportivo%20Jos%C3%A9%20L%C3%B3pez%20Soto!5e0!3m2!1ses!2ses!4v1645088841626!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center widget-vs-contents mb-4">
                  <p>
                    <a href="php/reserva.php" class="btn btn-primary py-3 px-4 mr-3">Inscribirse</a>
                  </p>
                </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo1.png" alt="Image"><hr>
                        <h3>Los Mares Futbol</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.7942246889033!2d-5.970384184836685!3d37.41833837982598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1269441032378f%3A0xf4205baa610c202!2sLos%20Mares%20Futbol!5e0!3m2!1ses!2ses!4v1645088798195!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center widget-vs-contents mb-4">
                  <p>
                    <a href="php/reserva.php" class="btn btn-primary py-3 px-4 mr-3">Inscribirse</a>
                  </p>
                </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo1.png" alt="Image"><hr>
                        <h3>Centro Deportivo Huerta del Perejil</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.922325902988!2d-5.97189808483675!3d37.415310779826484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126945a1fe3c51%3A0xd79cd52ee6d29644!2sCentro%20Deportivo%20Huerta%20del%20Perejil!5e0!3m2!1ses!2ses!4v1645088907852!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center widget-vs-contents mb-4">
                  <p>
                    <a href="php/reserva.php" class="btn btn-primary py-3 px-4 mr-3">Inscribirse</a>
                  </p>
                </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo1.png" alt="Image"><hr>
                        <h3>Centro Deportivo San Pablo Fútbol</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.6984741176507!2d-5.962984384837375!3d37.39696247983007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126ec6411e1547%3A0xd1380f17dd6f045f!2sCentro%20Deportivo%20San%20Pablo%20F%C3%BAtbol!5e0!3m2!1ses!2ses!4v1645088720262!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center widget-vs-contents mb-4">
                  <p>
                    <a href="php/reserva.php" class="btn btn-primary py-3 px-4 mr-3">Inscribirse</a>
                  </p>
                </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo1.png" alt="Image"><hr>
                        <h3>Campo de Fútbol C.D. Alcosa</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.0092237205363!2d-5.931314484836801!3d37.413256879826804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd12698e0c65a9a1%3A0x211da8b4348e4b0a!2sCampo%20de%20F%C3%BAtbol%20C.D.%20Alcosa!5e0!3m2!1ses!2ses!4v1645088634962!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center widget-vs-contents mb-4">
                  <p>
                    <a href="php/reserva.php" class="btn btn-primary py-3 px-4 mr-3">Inscribirse</a>
                  </p>
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