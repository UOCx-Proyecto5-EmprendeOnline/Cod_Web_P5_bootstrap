<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Enorelax - Experiencias enoturísticas</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles -->

  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/estilos_card.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link href="css/carousel.css" rel="stylesheet">
  <link rel="stylesheet" type ="text/css" href="css/footer_secciones.css">

    <!--estilos para leaflet-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/MarkerCluster.css" />
	<link rel="stylesheet" href="css/MarkerCluster.Default.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<link rel="stylesheet" href="css/leaflet.zoomhome.css" />
	<link rel="stylesheet" href="css/mapa.css" />

	<!--js requeridos para leaflet-->
	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js"></script>
	<script src="js/leaflet.markercluster-src.js"></script>
	<script src="js/leaflet.zoomhome.min.js"></script>
	<script src="js/bodegas.js"></script>
	<script src="js/limite.js"></script>


</head>

<body>

<header class="header">

<!-- Top Bar -->

<div class="top_bar">
  <div class="container">
    <div class="row">
        <div class="col d-flex flex-row">
          <div class="user_box ml-auto">
            <div class="user_box_login user_box_link"><a href="index.html"> <img class="margin-top" src="images/spain.png" alt=""></a></div>
            <div class="user_box_register user_box_link"><img class="margin-top" src="images/united-kingdom.png" alt=""></div>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- Main Navigation -->

<nav class="main_nav">
  <div class="container">
    <div class="row">
        <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
          <div class="logo_container">
            <div class="logo"><a href="#"><img height="95px" src="images/Logo_web_Enorelax.png" alt="">EnoRelax</a></div>
          </div>
          <div class="main_nav_container ml-auto">
            <ul class="main_nav_list">
                <li class="main_nav_item"><a href="#">Inicio</a></li>
                <li class="main_nav_item"><a href="about.html">Quiénes Somos</a></li>
                <li class="main_nav_item"><a href="offers.html">Packs</a></li>
                <li class="main_nav_item"><a href="blog.html">news</a></li>
                <li class="main_nav_item"><a href="contact.html">contact</a></li>
            </ul>
          </div>
          <div class="hamburger float-right">
            <i class="fa fa-bars trans_200"></i>
          </div>
        </div>
    </div>
  </div>
</nav>

</header>

<div class="menu trans_500">
<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
  <div class="menu_close_container">
    <div class="menu_close"></div>
  </div>
  <div class="logo menu_logo"><a href="#"><img src="images/Logo_web_Enorelax.png" alt=""></a></div>
  <ul>
    <li class="menu_item"><a href="#">home</a></li>
    <li class="menu_item"><a href="about.html">Quiénes somos</a></li>
    <li class="menu_item"><a href="offers.html">offers</a></li>
    <li class="menu_item"><a href="blog.html">news</a></li>
    <li class="menu_item"><a href="contact.html">contact</a></li>
  </ul>
</div>
</div>

  <main role="main">

    <div class="home">


    <div class="container marketing">

       <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Cariñena Wine Museum<span></h2>
          <p class="lead">It is located in an old winery from 1918, acquired by the Cariñena Denomination of Origin in the 90's. The restoration, carried out by the architects Ángel Comeras, Javier Gracia and José Luis Anadón, has conserved the main parts of the building, including the wooden deck. It also highlights its modernist facade.</p>
        </div>
        <div class="col-md-5">
          <img class="rounded-circle" src="images/foto_4.jpg"
            alt="Foto senderismo" width="500" height="400">
        </div>
      </div>

       <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Visit hours: </h2>
          <p class="lead">
				<h3>Tuesday to friday:</h3>
				From 10:00 to 14:00
				From 16:00 to 18:00</p>
		  <p class="lead">
				<h3>Saturday:</h3>
				From 11:00 to 14:00
				From 16:00 to 18:00</p>

		  <p class="lead">
				<h3>Sunday</h3>
				From 11:00 to 14:00</p>
        </div>
      </div>
		<hr class="featurette-divider">


    </div><!-- /.container -->


    <!-- FOOTER -->
	<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
	 <?php include "footer_en.html";?>
    </footer>



  </main>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="js/vendor/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>