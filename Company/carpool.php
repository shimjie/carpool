<?php
    // Start the session
    session_start();
    require "controller/routinecontroller/routine-load.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	-->
	
	  <!-- Favicons -->
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

    <title>Carpool Page</title>
  </head>
  <body>
	<!-- ======= Login Section ======= -->
	<div id = "login-page"></div>

	<!-- ======= Apply Section ======= -->
	<div id = "apply-page"></div>

	<!-- ======= Search Section ======= -->
	<div id = "route-search-page"></div>

	<!-- ======= navi Section ======= -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light"></nav>


	  <ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
		  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#searchingCar" role="tab" aria-controls="home" aria-selected="true">Looking for Cars</a>
		</li>
		<li class="nav-item" role="presentation">
		  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#searchingPassenger" role="tab" aria-controls="profile" aria-selected="false">Looking for passengers</a>
		</li>
	  </ul>
	  <div class="tab-content" id="myTabContent">
		 <div class="tab-pane fade show active" id="searchingCar" role="tabpanel" aria-labelledby="home-tab">
			<div class="card" style="width: 100%;">
				<div class="card-body">
					<button type="button" class="btn btn-success" id = "driverApply">Driver Apply</button>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="searchingPassenger" role="tabpanel" aria-labelledby="profile-tab">
			<div class="card" style="width: 100%;">
				<div class="card-body">
					<button type="button" class="btn btn-success" id = "passagerApply">Passager Apply</button>
				</div>
			</div>
		</div>
	  </div>

	  <br>


  <main id="main">

    <!-- ======= Blog Section ======= -->
    
    <?php
      foreach($routineList as $listItem){
          echo"
          <section id='blog' class='blog'>
              <div class='container'>
                <div class='row'>
                  <div class='col-lg-16 entries'>
                    <article class='entry' data-aos='fade-up'>
                      <h2 class='entry-title'>Hobart Sharing Routine</h2>
                      <div class='entry-meta'>
                        <ul>
                          <li class='d-flex align-items-center'><i class='icofont-user'></i>". $listItem->GetName(). "</li>
                          <li class='d-flex align-items-center'><i class='icofont-map-pins'></i>From "
                          . $listItem->GetArea(). " ". $listItem->GetRegion(). " to 
                          ". $listItem->GetDesArea(). " ". $listItem->GetDesRegion()."</li>
                        </ul>

                        <ul>
                          <li class='d-flex align-items-center'><i class='icofont-car-alt-3'></i> <time>". $listItem->GetStartTime() ."</time></li>";

                        if($listItem->GetType() == 1)
                          echo  "<li class='d-flex align-items-center'><i class='icofont-van'></i> <time>". $listItem->GetReturnTime() ."</time></li>";



                        echo  "<li class='d-flex align-items-center'><i class='icofont-wall-clock'></i><time>". $listItem->GetValidTime()."</time></li>
                        </ul>
                      </div>
        
                      <div class='entry-content'>
                        <p>
                          description:
                          <br>
                          Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                          Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                        </p>

                        <a data-toggle='collapse' href='#collapse_". $listItem->GetId()."' aria-expanded='false' aria-controls='collapse_". $listItem->GetId()."'>
                          Contact Method
                        </a>
                        <div class='entry-meta collapse' id='collapse_". $listItem->GetId()."'>
                          <ul>
                            <li class='d-flex align-items-center'><i class='icofont-smart-phone'></i>". $listItem->GetPhone(). "</li>
                            <li class='d-flex align-items-center'><i class='icofont-envelope-open'></i>". $listItem->GetEmail(). "</li>
                          </ul>
                        </div>

                        <div class='read-more'>
                          <a href='blog-single.html'>Apply</a>
                        </div>
                      </div>

                  </article><!-- End blog entry -->
                </div>
              </div>
          </section>
          ";
        }
    ?>
      

  </main><!-- End #main -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>

<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/menu.js"></script>
<script src="assets/js/routine-load.js"></script>
</body>

</html>