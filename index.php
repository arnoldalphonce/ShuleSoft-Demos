<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- bootstrap css -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- bootstrap js -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <title>RedaXe Learn</title>

  <style>
  #container{
    background-color: #9af1f1;
  }
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 520px;

  .active-purple-2 input[type=text]:focus:not([readonly]) {
  border-bottom: 1px solid #ce93d8;
  box-shadow: 0 1px 0 0 #ce93d8;
}
.active-purple input[type=text] {
  border-bottom: 1px solid #ce93d8;
  box-shadow: 0 1px 0 0 #ce93d8;
}

.active-purple .fa, .active-purple-2 .fa {
  color: #ce93d8;
}
  }
  </style>
</head>
<body>
    <!-- include navbar -->
    <?php include "navbar.php"; ?>

    <!-- background -->
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/background.jpg" alt="Los Angeles" width="1100" height="500">
          <div class="carousel-caption">
            <h1 class="text-left" id="header-inner">Learn in your schedule</h1>
            <p class="text-left" style="font-size: 18px;">Study any topic, anytime. Explore thousands of courses for the lowest price ever!</p>

            <!-- Search form -->
            <div class="input-group" id="search-input">
            <input type="text" class="form-control" id="input-search" placeholder="What Course do you prefer to learn">
            <div class="input-group-append">
              <button class="btn btn-danger" type="button">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
          </div>
        </div>


      </div>

    </div>
    <!-- end background -->

    <div class="p-5" id="top-card">
      <div class="row">
        <div class="col-md-4 pl-5">
          <h3 class="text-white"><i class="fas fa-clock text-white" style="color: red;"></i> &nbsp 12 Online courses</h3>
          <p class="text-white">Explore a variety of fresh topics and get started</p>
        </div>

        <div class="col-md-4 pl-5">
          <h3 class="text-white"><i class="fas fa-signal text-white" style="color: red;"></i> &nbsp Manage your Skills</h3>
          <p class="text-white">Find out more on skills ranking and how to grow them</p>
        </div>

        <div class="col-md-4 pl-5">
          <h3 class="text-white"><i class="fas fa-check text-white" style="color: red;"></i> &nbsp Complete vital Courses</h3>
          <p class="text-white">Explore awesome and useful courses to get you start up.</p>
        </div>

      </div>

    </div>

    <!-- Top courses -->

    <div class="container-fluid">
      <!-- courses -->
      <h4 class="pt-5">Top Courses</h4>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <img src="assets/images/students.jpg" class="card-img-top" alt="" style="height: 300px;">
            <div class="card-body">
              <h5 class="course-header">Theme development with Bootstrap</h5>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut deserunt.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="assets/images/student02.jpg" class="card-img-top" alt="" style="height: 300px;">
            <div class="card-body">
              <h5 class="course-header">Laravel Project developement</h5>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut deserunt.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="assets/images/learning.jpg" class="card-img-top" alt="" style="height: 300px;">
            <div class="card-body">
              <h5 class="course-header">Learn Pyhton with django framework</h5>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut deserunt.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="assets/images/background.png" class="card-img-top" alt="" style="height: 300px;">
            <div class="card-body">
              <h5 class="course-header">Wordpress development with Elementor</h5>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut deserunt.</p>
            </div>
          </div>
        </div>

      </div>
<!-- End courses -->

      <!-- Top 10 Courser -->

      <h4 class="pt-5">Top 10 Free Courses Available</h4>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <img src="assets/images/SEO.jpg" class="card-img-top" alt="" style="height: 300px;">
            <div class="card-body">
              <h5 class="course-header">Search Engine Optimization with wordpress</h5>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut deserunt.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="assets/images/background.png" class="card-img-top" alt="" style="height: 300px;">
            <div class="card-body">
              <h5 class="course-header">Laravel Project developement</h5>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut deserunt.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="assets/images/background.jpg" class="card-img-top" alt="" style="height: 300px;">
            <div class="card-body">
              <h5 class="course-header">Learn Pyhton with django framework</h5>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut deserunt.</p>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <img src="assets/images/student02.jpg" class="card-img-top" alt="" style="height: 300px;">
            <div class="card-body">
              <h5 class="course-header">Wordpress development with Elementor</h5>
              <p class="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe ut deserunt.</p>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- Horizontal line -->
    <br/><br/><br/>
    <hr>
    <?php include "footer.php";?>

</body>
</html>
