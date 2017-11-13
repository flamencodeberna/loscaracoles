<?php include('perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <meta name="robots" content="noindex">

    <title>Peña Flamenca los Caracoles</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
		<div  class="container-fluid mifondo">
				<nav class="navbar navbar-expand-md navbar-dark mifondo navbar-inverse bg-inverse  container">
		  <img class="mr-2" src="img/logo-caracoles-transparente.png" width="45" height="35">
		  <a class="navbar-brand" href="index.html">Los caracoles</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		    <ul class="navbar-nav ml-auto text-center">
		      <li class="nav-item">
		        <a class="nav-link" href="veranstaltungen.html">Veranstaltungen</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="verein.html">Verein</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="mitglieder.html">Mitglieder</a>
		      </li>
		     
		      <li class="nav-item">
		        <a class="nav-link" href="kontakt.html">Kontakt</a>
		      </li>
		      		    
		    </ul>
		    <div class="d-flex flex-row justify-content-around ml-2">
		  		<a href="https://www.facebook.com/search/top/?q=pe%C3%B1a%20flamenca%20los%20caracoles" class="btn btn-outline-danger">F</a>
    		</div>
		  </div>
		</nav>
		</div>		
		<!-- Carousel -->
		<div id="myCarousel" class="carousel slide test" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide img-fluid" src="img/homenagerafaeldehuelva.jpg"  alt="First slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Peña Flamenca<br>Los Caracoles</h1>
              <p>Bern seit 1990</p>
            </div>-->
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide img-fluid" src="img/homenagerafaeldehuelva1.jpg" alt="Second slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Peña Flamenca<br>Los Caracoles</h1>
              <p>Bern seit 1990</p>
            </div>-->
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide img-fluid" src="img/homenagerafaeldehuelva2.jpg" alt="Third slide">
          <div class="container">
            <!--<div class="carousel-caption">
              <h1>Peña Flamenca<br>Los Caracoles</h1>
              <p>Bern seit 1990</p>
            </div>-->
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- // Carousel> -->
	<section class="py-5">
		<div class="container">
			<?php perch_content('test'); ?>
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-uppercase display-5">Konzerte</h1>
					<hr class=" mb-5">
				</div>
				
					<div class="col-md-3" style="background-color: green;">
						<h5>Datum</h5>
					</div>
					<div class="col-md-3" style="background-color: rgba(146, 43, 43, 1)">
						<img src="http://waveroutes.com/html/premix/img/event-img-1.png" class="img-fluid">
					</div>
					<div class="col-md-3 p-2" style="background-color: green"#c8cb1b>
						<h5>Wo?</h5>
					</div>
					<div class="col-md-3 p-2"style="background-color: #3ea53e">
						<h5>Details</h5>
					</div>
			</div>
		</div>
	</section>
	<footer class=" py-5 bg-dark text-white">
		<div class="container">
			<div class="row">
				<div class="col">
					<h5>Lo que sea</h5>
				</div>
				<div class="col">
					<h5>Links</h5>
				</div>
				<div class="col">
					<h5>Flamenco</h5>
				</div>
				<div class="col">
					<h5>Bla Bla</h5>
				</div>
			</div>
		</div>
	</footer>
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   
   
  </body>
</html>
