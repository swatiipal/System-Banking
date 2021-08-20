<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>System Banking!</title>
</head>

<body translate="no" >
  <nav class="navbar navbar-expand-custom navbar-mainbg fixed-top">
    <a class="navbar-brand navbar-logo" href="index.php"><h2>SPI Bank</h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item">
              <a class="nav-link" href="index.php"><i class="fas fa-home" href=""></i>Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="select_customer.php"><i class="fas fa-info-circle"></i>Customer Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="all_customer.php"><i class="fas fa-users"></i>All Customer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment.php"><i class="fas fa-rupee-sign"></i>Transfer Money</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="transaction_history.php"><i class="far fa-copy"></i>Transaction History</a>
            </li>
        </ul>
      </div>
  </nav>

  
<!-- HOME SECTION -->
<section class="home" id="home">
	<div class="swiper-container home-slider">
		<div class="swiper-wrapper wrapper">
			<div class="swiper-slide slide">
				<div class="content">
					<h1>Money in your preffered Bank account</h1>
					<h3></h3>
					<p>Whether you’re looking for best service or advanced service, we are here to help you with what you need!</p>
					<a href="#" class="hero-btn">Get Started-></a>
				</div>
				<div class="image">
					<img src="images/bank.png" alt="">
				</div>
			</div>		
		</div>

		<div class="swiper-pagination"></div>
	</div>
</section>


<!-- CARD STARTS-->
<section class="course">
<h1>Enjoy Our Service</h1>
		<p>Easiest Way to go online!</p>
 <div class="container">
  <div class="card">
    <div class="box">
      <div class="content">
      <img src="images/save.jpg" class="card-img-top" alt="...">
        <h2>SBI</h2>
        <h3>Money Saving</h3>
        <p>If you wish to get rich, save what you get.<br></p>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
      <img src="images/send.jpg" class="card-img-top" alt="...">
        <h3>Easiest Way to transfer Money</h3>
        <p>Send to friends and family around the world, in seconds.</p>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="box">
      <div class="content">
      <img src="images/secure.jpg" class="card-img-top" alt="...">
        <h3>World class Security</h3>
        <p>All your transactions are secured with us</p>
        
      </div>
    </div>
  </div>
 </div>
</section>

<!-- CONTACT Page -->
<section class="text-center about">
  <h1>Contact US</h1>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200" >
            <span class="fas fa-map-marker-alt" ></span>
            <h2>Location</h2>
            <p class="lead">Indralok phase-6, Bhayandar(E) </p>
          </div>
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
            <a href="contact.php"><span class="fas fa-envelope-open"></span></a>
            <h2>Write us </h2>
            <p class="lead">sbi_bank@gmail.com<br>Contact us for more information<br> call us on <br> +91 7770077700 </p>
          </div>
          
          <div class="col-lg-4 col-sm-6 col-ex-12 about-item wow lightSpeedIn" data-wow-offset="200">
            <span class="fab fa-linkedin-in"></span>
            <h2>Follow</h2>
            <p class="lead">This is my linkdin profile. You can follow us here. You no longer have to let your latest role speak for you. </p>
          </div>
          
        </div>

      </div>
</section>

<!-- FOOTER AREA -->

<footer class="new_footer_area bg_color">
    <div class="container">
      <div class="copyright">
        &copy; 2021 Copyright <strong>Swati Pal</strong>.   |All Rights Reserved|
      </div>
    </div>  
</footer>

    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>

    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script id="rendered-js" ></script>

	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>