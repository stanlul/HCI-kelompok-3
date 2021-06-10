<?php 
  session_start(); 

//   if (!isset($_SESSION['username'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: login.php');
//   }
//   if (isset($_GET['logout'])) {
//   	session_destroy();
	// unset($_SESSION['username']);
  	// header("location: login.php");
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="../css/clean-blog.min.css" rel="stylesheet">
</head>
<body>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <!-- <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?> -->
</div>

<div class="fix">

    <nav class="navbar navbar-expand-lg navbar-light fixed-top " id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#">Agro Rakyat</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../street.html">Streetview</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Artikel
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../apel.html">Jenis Apel</a>
                <a class="dropdown-item" href="../olahan.html">Olahan Apel</a>
              </div>
            </li>
            <li class="nav-item">
				<?php
				$name='';
				if (isset($_SESSION['username'])) {
					//echo $_SESSION['username'];
					
					$name=$_SESSION['username'];
				}
				else{
					echo '<a class="nav-link" href="login.php">Login</a>';}?>


              <a class="nav-link" href="logout.php"><?php echo $name; ?></a>

            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('../img/home1.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Agrowisata Petik Apel</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="about.html">
            <h2 class="post-title">
              Welcome to Agro Rakyat!
            </h2>
          </a>
          <p class="text-justify">Agro Rakyat merupakan salah satu wisata petik apel yang dapat kalian kunjungi di Kota Batu. Di sana kalian bisa melihat pemandangan dari kebun apel yang sangat luas. Tidak hanya pemandangan saja yang bisa dinikmati. Kalian pun boleh memetik 4 dari 5 jenis apel terkenal yang ada di Kota Batu sepuasnya, tentu berdasarkan persyaratan yang berada di sana. Apel yang sudah kalian petik bisa kalian bawa pulang dan harga yang ditetapkan pun terjangkau. Silahkan mengunjungi Agro Rakyat dan merasakan pengalaman-pengalaman baru yang hanya bisa didapatkan di sana.
          </p>

        </div>
        <hr>
      </div>
    </div>
  </div>

  <div class="container">
    <span class="border border-white">
      <div class="row">
        <div class="col mx-auto">
          <a href="../apel.html" >
            <div class="card mx-auto" style="width: 10rem;">
              <img src="../img/logo artikel apel.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center" >Apel</h5>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col mx-auto" >
          <a href="../olahan.html">
            <div class="card mx-auto" style="width: 10rem;">
              <img src="../img/logo olahan.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center" >Olahan</h5>
              </div>
            </div>
          </a>
        </div>
        
        <div class="col mx-auto" >
          <a href="../street.html">
            <div class="card mx-auto" style="width: 10rem;">
              <img src="../img/logo street.png" class="card-img-top " alt="...">
              <div class="card-body">
                <h5 class="card-title text-center" >Streetview</h5>
              </div>
            </div>
          </div>
        </a>
      </div>
      </span>
      
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/campur 1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../img/campur 2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/agro_rakyat/">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; PETIK APEL 2021</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/clean-blog.min.js"></script>


</body>
</html>