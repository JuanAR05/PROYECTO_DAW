<!DOCTYPE html>
<html lang="en">

<head>
  <title> PlayFut</title>
  <link rel="shortcut icon" href="images/logo2.png" mce_href="images/logo2.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
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
                        
                          <span class="image">
                          <a href "http://localhost/PROYECTO_PLAYFUT/soccer-master/index.php">
                              <img src="images/logo_usuario/Logo.png" alt="Logo"></a>
                          </span>
                          
                          <div class="text header-text">
                              <span class="name">PLAYFUT</span>
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
    <div class="body close">
    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">Champions Sevilla</h1>
            <p>Reserva partidos con tus amigos para saber quien será el mejor equipo de todos</p>
            <!-- <div id="date-countdown"></div> -->
            <p>
              <a href="php/reserva.php" class="btn btn-primary py-3 px-4 mr-3">Inscribirse</a>
              <a href="contact.php" class="more light">Leer más</a>
            </p>  
          </div>
        </div>
      </div>
    </div>

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Jugar Ahora</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <div class="post-entry">
              <a href="reserva.php">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                <a href="reserva.php">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
                  <h3 class="mb-3">Reserva ahora tu pista de fútbol</h3>
                  <div class="author d-flex align-items-center">
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-lg-6">
            <div class="post-entry">
              <a href="partido.php">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                <a href="partido.php">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
                  <h3 class="mb-3">Únete a partidos con otros jugadores</h3>
                  <div class="author d-flex align-items-center">
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
        <div class="col-12 title-section">
            <h2 class="heading">Nuestras Pistas de Futbol</h2>
          </div>
          <!--    inicio de listado de mejores centros      -->
          <div class="col-lg-6">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Centro Deportivo Santa Justa Fútbol</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      
                      <br><br>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.855861215282!2d-5.979867584837436!3d37.393240879830735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126eaf417f2c59%3A0xb67a19503ccd5ee3!2sCentro%20Deportivo%20Santa%20Justa%20F%C3%BAtbol!5e0!3m2!1ses!2ses!4v1639741594539!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--    fin de listado de mejores centros      -->
          <div class="col-lg-6">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Complejo Deportivo Demetrio Pichel</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      
                      <br><br>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.577760452688!2d-5.938052685049251!3d37.39981667982928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126f2bf91f05fd%3A0x8cc5a56b25b7a151!2sComplejo%20Deportivo%20Demetrio%20Pichel!5e0!3m2!1ses!2ses!4v1639743318474!5m2!1ses!2ses" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div> <!-- .site-section -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Noticias</h2>
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
              <img src="https://phantom-elmundo.unidadeditorial.es/11429ec8e3cd5dfc045c0e8c18728c3b/crop/85x0/3072x1991/resize/600/f/webp/assets/multimedia/imagenes/2022/01/14/16421513073574.jpg" alt="Image" class="img-fluid">
              <a href="https://www.elmundo.es/deportes/futbol/2022/01/14/61e13d6e21efa01d7d8b45bd.html" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Carvajal, positivo en coronavirus</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="https://phantom-elmundo.unidadeditorial.es/49595c67b4dfd4044e316bdd3cb81776/crop/43x101/1050x772/resize/600/f/webp/assets/multimedia/imagenes/2022/01/14/16421502684331.jpg" alt="Image" class="img-fluid">
              <a href="https://www.elmundo.es/deportes/futbol/2022/01/13/61e09a7221efa03b458b45a5.html" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Simeone se ha inventado un Atlético caótico</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="https://phantom-elmundo.unidadeditorial.es/bac7171650c428f2f085058734dd9447/crop/0x0/3071x2047/resize/600/f/webp/assets/multimedia/imagenes/2022/01/14/16421511577533.jpg" alt="Image" class="img-fluid">
              <a href="https://www.elmundo.es/deportes/futbol/2022/01/14/61e13f0afdddff48528b45cb.html" class="d-flex play-button align-items-center">
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Final Supercopa de España: Hora y dónde ver en TV el Real Madrid - Athletic</h3>
                </div>
              </a>
            </div>
          </div> 

          <div class="item">
            <div class="video-media">
              <img src="https://phantom-elmundo.unidadeditorial.es/d73e39b92548031bb525a5531337861e/resize/600/f/webp/assets/multimedia/imagenes/2022/01/13/16421097359818.jpg" alt="Image" class="img-fluid">
              <a href="https://www.elmundo.es/deportes/futbol/2022/01/13/61e0a188fc6c83d93c8b4587.html" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">El sueño de los Williams, de saltar la valla de Melilla a 'matagigantes' de la Supercopa</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="https://phantom-elmundo.unidadeditorial.es/b8bb5f760e2476f5e56927db1cf2497d/crop/38x25/3072x2048/resize/600/f/webp/assets/multimedia/imagenes/2022/01/13/16420903119031.jpg" alt="Image" class="img-fluid">
              <a href="https://www.elmundo.es/deportes/futbol/2022/01/13/61e04f7ae4d4d8333c8b45be.html" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Los inspectores de Hacienda acusan a Ancelotti"</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="https://phantom-elmundo.unidadeditorial.es/710004febd4943bb67e8ce2a4b917f24/crop/311x35/1417x772/resize/600/f/webp/assets/multimedia/imagenes/2022/01/12/16420135743096.jpg" alt="Image" class="img-fluid">
              <a href="https://www.elmundo.es/deportes/futbol/2022/01/12/61df224ee4d4d83f2f8b45e0.html" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Oblak busca un oasis en su temporada más extraña</h3>
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
                  aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Angel</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
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