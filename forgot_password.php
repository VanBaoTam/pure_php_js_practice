<!DOCTYPE html>
<html lang="en">

<head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="assets/images/favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
            rel="stylesheet">

      <title>Chairable</title>

      <!-- Bootstrap core CSS -->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Additional CSS Files -->
      <link rel="stylesheet" href="assets/css/fontawesome.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/owl.css">
      <script>
            if (window.history.replaceState) {
                  window.history.replaceState(null, null, window.location.href);
            }
      </script>
</head>

<body>

      <!-- ***** Preloader Start ***** -->
      <div id="preloader">
            <div class="jumper">
                  <div></div>
                  <div></div>
                  <div></div>
            </div>
      </div>
      <!-- ***** Preloader End ***** -->

      <!-- Header -->
      <header class="">
            <nav class="navbar navbar-expand-lg">
                  <div class="container">
                        <a class="navbar-brand" href="index.php">
                              <h2>Chairable <em>Website</em></h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                              data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                              aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                              <ul class="navbar-nav ml-auto" id="nav">

                              </ul>
                        </div>
                  </div>
            </nav>
      </header>

      <!-- Page Content -->
      <!-- Banner Starts Here -->
      <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading.jpg);">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="text-content">
                                    <h4>Let's decorate your house!
                                    </h4>
                                    <h2>Forgot Password</h2>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Banner Ends Here -->
      <div class="latest-products">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="section-heading">
                                    <h2>Forgot Password</h2>
                              </div>
                        </div>
                        <div class="col-md-12">
                              <form action="forgot_password.php" method="POST">
                                    <div class="product-item">
                                          <div class="down-content">
                                                <div class="form-group">
                                                      <label for="email">Email:</label>
                                                      <input type="email" class="form-control" id="email" name="email"
                                                            required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Reset Password</button>
                                          </div>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>



      <footer>
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="inner-content">
                                    <p>Copyright © 2023 Chairable Company </p>
                              </div>
                        </div>
                  </div>
            </div>
      </footer>

      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="utils/account/Logout.js"></script>
      <script src="utils/account/Navbar.js"></script>

      <!-- Additional Scripts -->
      <script src="assets/js/custom.js"></script>
      <script src="assets/js/owl.js"></script>
      <?php
      include("./modules/database/conn.php"); ?>
</body>

</html>