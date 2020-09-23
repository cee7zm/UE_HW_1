<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  {% load staticfiles %}
  <link rel="shortcut icon" type="image/png" href="{% static 'favicon.ico' %}" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="js/jquery/jquery-3.1.0.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css">

  <!-- Theme CSS -->
  <link href="/../../static/CustomLogin.css" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/40286eefce.js" crossorigin="anonymous"></script>

</head>


<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" title="Return to Top" href="#page-top">UVA Ridershare</a>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <!--in the menu: nothing?-->
          <!-- <li class="nav-item mx-0 mx-lg-1">
                  <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
                </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">

  </header>
  <div class="container d-flex align-items-center flex-column">

    <!-- Masthead Avatar Image -->
    <img class="masthead-avatar mb-5" src="/../../static/images/blue-bird.png" width="200" height="167" alt="">


    <!-- Masthead Heading -->
    <div id="loginHeader">



      {% if user.is_authenticated %}
      <h1 class="masthead-heading text-uppercase mb-0">You're Logged In!</h1>

      

        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
              <i class="fas fa-star"></i>
            </div>
          <div class="divider-custom-line"></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <a href="{{ '/feed/' }}">
                <button type="button"  style="background-color: rgb(43, 169, 225)" class="btn btn-info" title="View Rides" role="button">VIEW RIDES</button>
              </a>
            </div>
          </div>
        </div>
        {% else %}
        <h1 class="masthead-heading text-uppercase mb-0" title="Login to Ride">Login to Ride!</h1>
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
              <i class="fas fa-star"></i>
            </div>
          <div class="divider-custom-line"></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <a class="btn btn-info" href="{% url 'social:begin' 'google-oauth2' %}?next={{ '/feed/' }}"
                role="button" style="background-color: rgb(43, 169, 225)">LOGIN &raquo;</a>
            </div>
          </div>
        </div>
        {% endif %}


      </div>
    </div>
    <!-- About Section -->
    <section class="page-section bg-primary text-white mb-0" id="about">
      <div class="container">

        <!-- About Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon">
            <i class="fas fa-star"></i>
          </div>
          <div class="divider-custom-line"></div>
        </div>

        <!-- About Section Content -->
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Team BlueJay is made up of four awesome UVA CS students, Brandon, Jonathan, Joanna, and
              Caroline. We created the UVA Rideshare for our Advanced Software class. It is inspired by the Facebook
              group, 'Hoo's Driving? Hoo's Riding?'</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">To start, sign in using your UVA email (must have @virginia.edu email). View all the available rides in the feed and sign up for one. 
              If you are able to drive somewhere and want to invite others to join you, make a post using the "+" button. View your profile and see the rides you have 
              signed up for or created!
            </p>
          </div>
        </div>


      </div>
    </section>
   


    <!-- Copyright Section -->
    <section class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; BlueJay 2019</small>
      </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>



</body>

</html>
