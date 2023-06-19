<!DOCTYPE html>
<html lang="en">

<head>
  <title> PlayFut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/logo2.png" mce_href="images/logo2.png" type="image/x-icon" />

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
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.html">
              <img src="images/logo1.png" alt="Logo" width="170">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                <li><a href="reserva.html" class="nav-link">Reserva</a></li>
                <li><a href="partido.html" class="nav-link">Partidos</a></li>
                <li><a href="torneo.html" class="nav-link">Torneos</a></li>
                <li><a href="contact.html" class="nav-link">Contacto</a></li>
                <li><a href="php/user.php" class="nav-link">Sesion Iniciada Como: 
                <?php
                session_start();
                echo($_SESSION['usuario']);
                ?>

                </a></li>
              </ul>
            </nav>
        
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">Champions Sevilla</h1>
            <p>Apuntate al torneo más importante del año donde se descubrira el mejor equipo de la CALLE con multiples premios</p>
            <div id="date-countdown"></div>
            <p>
              <a href="#" class="btn btn-primary py-3 px-4 mr-3">Inscribirse</a>
              <a href="#" class="more light">Leer más</a>
            </p>  
          </div>
        </div>
      </div>
    </div>

    
    
   <!-- <div class="container">
      

      <div class="row">
        <div class="col-lg-12">
          
          <div class="d-flex team-vs">
            <span class="score">4-1</span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_1.png" alt="Image" class="img-fluid">
                <h3>LA LEGA <span>(win)</span></h3>
                <ul class="list-unstyled">
                  <li>Anja Landry (7)</li>
                  <li>Eadie Salinas (12)</li>
                  <li>Ashton Allen (10)</li>
                  <li>Baxter Metcalfe (5)</li>
                </ul>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_2.png" alt="Image" class="img-fluid">
                <h3>JUVENDU <span>(loss)</span></h3>
                <ul class="list-unstyled">
                  <li>Macauly Green (3)</li>
                  <li>Arham Stark (8)</li>
                  <li>Stephan Murillo (9)</li>
                  <li>Ned Ritter (5)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  -->

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Jugar Ahora</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="post-entry">
              <a href="reserva.html">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Reserva ahora tu pista de fútbol</h3>
                  <div class="author d-flex align-items-center">
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="partido.html">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Únete a partidos con otros jugadores</h3>
                  <div class="author d-flex align-items-center">
                  </div>
                </div>
              </div> 
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="torneo.html">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Apuntate a torneos para competir con otros equipos</h3>
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
              <!--
              <div class="text-center widget-vs-contents mb-4">
                <h4>World Cup League</h4>
                <p class="mb-5">
                  <span class="d-block">December 20th, 2020</span>
                  <span class="d-block">9:30 AM GMT+0</span>
                  <strong class="text-primary">New Euro Arena</strong>
                </p>

                <div id="date-countdown2" class="pb-1"></div>
              </div>-->
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
              <!--
              <div class="text-center widget-vs-contents mb-4">
                <h4>World Cup League</h4>
                <p class="mb-5">
                  <span class="d-block">December 20th, 2020</span>
                  <span class="d-block">9:30 AM GMT+0</span>
                  <strong class="text-primary">New Euro Arena</strong>
                </p>

                <div id="date-countdown2" class="pb-1"></div>
              </div>-->
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
                  <h3 class="m-0">Carvajal, positivo en coronavirus, se tendrá que quedar hasta el martes en Arabia Saudí</h3>
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
<!-- 
    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Our Blog</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div> -->



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


  <script src="js/main.js"></script>

</body>

</html>