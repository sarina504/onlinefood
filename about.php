<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>About Us</title>
    <link rel = "icon" href ="img/logo.jpg" type = "image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body>
  <?php include 'partials/_dbconnect.php';?>
  <?php include 'partials/_nav.php';?>
  
      <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/slide/slide-1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Onlinfood shop</span></h2>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Our Mission</h2>
                <p class="animate__animated animate__fadeInUp">To provide quality Food at Your Door</p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3>Welcome to <strong>Online foodshop</strong></h3>
            <h3><strong>Quality Food at Your Door!</strong></h3>
            <p class="font-italic">
          </div>
    
<div class="col-lg-6 pt-4 pt-lg-0 content">
            <div class="skills-content">
              <p><b>Rating: </b></p>
              <div class="progress">
                <span class="skill">5 star <i class="val">93%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">4 star <i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">3 star <i class="val">30%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
               <div class="progress">
                <span class="skill">2 star <i class="val">5%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">1 star <i class="val">0%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    
        <section class="fservices">
    <div class="row" style="padding-left: 50px; padding-right: 50px;">
      <div class="col s12 l4 center" style="padding: 50px 50px;">
        <i class="large material-icons" >local_dining</i>
        <h5 class="header" >Variety of Dishes</h5>
      </div>
      <div class="col s12 l4 center" style="padding: 50px 50px;">
        <i class="large material-icons" >local_shipping</i>
        <h5 class="header" >Free Delivery</h5>
      </div>
      <div class="col s12 l4 center" style="padding: 50px 50px;">
        <i class="large material-icons" >mood</i>
        <h5 class="header" >Excellent Quality</h5>
      </div>
    </div>
  </section></div></section>

  


  <?php include 'partials/_footer.php';?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


  </body>
</html>
