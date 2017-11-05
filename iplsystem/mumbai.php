<!DOCTYPE html>
<?php
include("functions.php");
?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icons/ipltitle.icon">
    <title>Indian Premier League</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/half-slider.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="images/ipl.jpg" class="rounded mx-auto d-block" alt="ipl logo" style="width: 65px; height: 40px;">
        <a style="margin-left: 20px;" class="navbar-brand" href="index.html">Indian Premier League</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="team.html">Teams</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="schedule.html">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link badge badge-primary" href="register.html" style="padding:15px;margin-left: 30px;">Player Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <section class="py-5">
      <div class="container">
        <br>
        <div style="color:white;" class="row">
            <div style="background-color:blue;" class="col">
              <h2 style="padding-top:5px;">Mumbai Indians</h2>
              <p>Owner: Indiawin Sports pvt.Ltd</p>
              <p>Coach: Mahela Jayawardene</p>
              <p>Venue: Wankhede Stadium</p>
              <p>Captain: Rohit Sharma</p>
            </div>
            <div class="col">
              <center><img src="images/Mumbai_Indians_Logo.png" style="height:200px;width:300px;" class="img-fluid" alt="Responsive image"></center>
            </div>
        </div>
        <br>
        <img src="images/teamcover/MI_DreamTeam_ArticleCover_O2.jpg" class="img-fluid" alt="Responsive image">
        <br>
        <br>
        <h3>Squad List</h3>
        <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Player Name</th>
                  <th>Player Type</th>
                  <th>Age</th>
                  <th>Salary</th>
                  <th>Experience</th>
                </tr>
              </thead>
              <tbody>
                <?php getMumbaiDetails();?>
              </tbody>
        </table>
        </div>
      
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
