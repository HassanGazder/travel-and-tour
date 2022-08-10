<?php
include("connection.php")
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
	<link rel="stylesheet" href="./asset/css/style.css" />
	<title>Travel And Tour</title>
<style>
	.go-top {
  position: fixed;
  bottom: 0;
  right: 15px;
  background: white;
  color: black;
  font-size: 40px;
  padding: 10px;
  border-radius: var(--radius-6);
  visibility: hidden;
  opacity: 0;
  transition: var(--transition-1);
}

.go-top.active {
  visibility: visible;
  opacity: 1;
  transform: translateY(-15px);
}

</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="#"><img style="width: 100%;height:120px;object-fit:contain;" src="./asset/images/weblogo.jpg" alt=""></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa-solid fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link " aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="gallery.php">Gallery</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="tours.php">Tours</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="team.php">Team</a>
					</li>
					<li class="nav-item">
						<button class="btn custom-btn" type="submit" id="nav-button">Booking Now</button>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- banner -->
	<section class="banner-6">
		<div class="container-fluid">
			<div class="mapouter">
				<div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=2880 Broadway, New York&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com/">embed google maps in website</a></div>
				<style>
					.mapouter {
						position: relative;
						text-align: right;
						width: 100%;
						height: 400px;
					}

					.gmap_canvas {
						overflow: hidden;
						background: none !important;
						width: 100%;
						height: 400px;
					}

					.gmap_iframe {
						width: 100% !important;
						height: 400px !important;
					}
				</style>
			</div>
		</div>
	</section>
	<!-- banner -->



	<!-- hero-6 -->
	<section class="hero-6">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-12 col-sm-12">
					<div class="heading-h1">Contact Us Now</div>
					<p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, delectus Lorem ipsum
						dolor
						sit amet,
						consectetur adipisicing elit. Sint id perspiciatis delectus tempora nesciunt dolorem modi
						laborum,
						hic ipsa aperiam.</p>

					<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum doloremque modi
						ut assumenda
						sequi voluptate omnis quidem tempora! Atque, cum. Facere tenetur voluptate neque ipsam quod
						quasi
						assumenda maxime laboriosam.</p>

					<button class="btn custom-btn mt-3" type="submit" id="nav-button">Read More</button>

				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-5 col-md-12 col-sm-12">
					<img src="./asset/images/contact-hero.jpg" alt="">
				</div>
				<!-- second-row -->

				<div class="col-lg-4 col-md-12 col-sm-12 second-row">
					<p class="fw-bold text-black heading">New York</p>
					<p class="mt-4">Agam fabulas. Ut audiam invenire iracun. Tn eam dimo diam ea. Piqor sit.</p>

					<div class="icons mt-4">
						<i class="fa-solid fa-message me-3"></i>
						<span>Hassangazder3@gmail.com</span>
						<br>
						<br>

						<i class="fa-solid fa-phone me-3"></i>
						<span>0310-8009180</span>

						<br>
						<br>

						<i class="fa-solid fa-location-dot me-3"></i>
						<span>Karachi,Pakistan</span>
					</div>

				</div>
				<div class="col-lg-4 second-row">
					<p class="fw-bold text-black heading">Paris</p>
					<p class="mt-4">Agam fabulas. Ut audiam invenire iracun. Tn eam dimo diam ea. Piqor sit.</p>

					<div class="icons mt-4">
						<i class="fa-solid fa-message me-3"></i>
						<span>Hassangazder3@gmail.com</span>
						<br>
						<br>

						<i class="fa-solid fa-phone me-3"></i>
						<span>0310-8009180</span>

						<br>
						<br>

						<i class="fa-solid fa-location-dot me-3"></i>
						<span>Karachi,Pakistan</span>
					</div>

				</div>
				<div class="col-lg-4 second-row">
					<p class="fw-bold text-black heading">London</p>
					<p class="mt-4">Agam fabulas. Ut audiam invenire iracun. Tn eam dimo diam ea. Piqor sit.</p>

					<div class="icons mt-4">
						<i class="fa-solid fa-message me-3"></i>
						<span>Hassangazder3@gmail.com</span>
						<br>
						<br>

						<i class="fa-solid fa-phone me-3"></i>
						<span>0310-8009180</span>

						<br>
						<br>

						<i class="fa-solid fa-location-dot me-3"></i>
						<span>Karachi,Pakistan</span>
					</div>

				</div>
				<!-- second-row -->

			</div>

		</div>
	</section>
	<!-- hero-6 -->

	<?php
	if (isset($_POST["register"])) {
		$usname = $_POST["uname"];
		$usemail = $_POST["uemail"];
		$usnumber = $_POST["unumber"];
		$usmessage = $_POST["umessage"];

		$insert = "insert into employes (Name,Email,Password,Number) values 
('" . $usname . "','" . $usemail . "','" . $usnumber . "','" . $usmessage . "')";

		$insert1 = mysqli_query($connection, $insert);
		if ($insert1) {
			echo "Have a good day!";
		} else {
			echo "Have a good night!";
		}
	}
	?>
	<!-- form  -->
	<form method="post">
		<section class="form">
			<div class="container">
				<h3 class="text-white fw-bold px-5 py-4">Leave a Reply</h3>
				<div class="row">
					<div class="col-lg-12">
						<div class="background">
							<div class="container">
								<div class="screen">
									<div class="screen-header">
										<div class="screen-header-left">
											<div class="screen-header-button close"></div>
											<div class="screen-header-button maximize"></div>
											<div class="screen-header-button minimize"></div>
										</div>
										<div class="screen-header-right">
											<div class="screen-header-ellipsis"></div>
											<div class="screen-header-ellipsis"></div>
											<div class="screen-header-ellipsis"></div>
										</div>
									</div>
									<div class="screen-body">
										<div class="screen-body-item left">
											<div class="app-title">
												<span>Leave A Reply</span>
											</div>
											<div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
										</div>
										<div class="screen-body-item">
											<div class="app-form">
												<div class="app-form-group">
													<input name="uname" class="app-form-control" placeholder="NAME">
												</div>
												<div class="app-form-group">
													<input name="uemail" class="app-form-control" placeholder="EMAIL">
												</div>
												<div class="app-form-group">
													<input name="unumber" class="app-form-control" placeholder="CONTACT NO">
												</div>
												<div class="app-form-group message">
													<input name="umessage" class="app-form-control" placeholder="MESSAGE">
												</div>
												<div class="app-form-group buttons">
													<button name="register" type="submit" class="btn btn-light send-button"><i class="fa-solid fa-paper-plane"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
	</form>

	<!-- form  -->


	<!-- footer -->
	<!-- Remove the container if you want to extend the Footer to full width. -->
	<section class="footer">
		<div class="container-fluid mt-5">

			<!-- Footer -->
			<footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
				<!-- Section: Social media -->
				<section class="d-flex justify-content-between p-4" style="background-color: #1f1a54">
					<!-- Left -->
					<div class="me-5">
						<span>Get connected with us on social networks:</span>
					</div>
					<!-- Left -->

					<!-- Right -->
					<div>
						<a href="" class="text-white me-4">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="" class="text-white me-4">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="" class="text-white me-4">
							<i class="fab fa-google"></i>
						</a>
						<a href="" class="text-white me-4">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="" class="text-white me-4">
							<i class="fab fa-linkedin"></i>
						</a>
						<a href="" class="text-white me-4">
							<i class="fab fa-github"></i>
						</a>
					</div>
					<!-- Right -->
				</section>
				<!-- Section: Social media -->

				<!-- Section: Links  -->
				<section class="">
					<div class="container text-center text-md-start mt-5">
						<!-- Grid row -->
						<div class="row mt-3">
							<!-- Grid column -->
							<div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
								<!-- Content -->
								<h6 class="text-uppercase fw-bold mt-3">Company name</h6>
								<p>
									Here you can use rows and columns to organize your footer
									content. Lorem ipsum dolor sit amet, consectetur adipisicing
									elit.
								</p>
							</div>
							<!-- Grid column -->

							<!-- Grid column -->
							<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
								<!-- Links -->
								<h6 class="text-uppercase fw-bold mt-3">Top Destinations</h6>


								<p href="#!" class="text-white" style="list-style: none;">Indonesia,Jakarta</p>

								<p>
								<p href="#!" class="text-white">Maldives,Male</p>


								<p href="#!" class="text-white">Austrailia,Canberra</p>


								<p href="#!" class="text-white">Thailand,Bankok</p>


								<p href="#!" class="text-white">Morroco,Rabbat</p>

							</div>
							<!-- Grid column -->

							<!-- Grid column -->
							<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
								<!-- Links -->
								<h6 class="text-uppercase fw-bold mt-3">Categories</h6>

								<p href="#!" class="text-white">Travel </p>


								<p href="#!" class="text-white">Lifesylet</p>


								<p href="#!" class="text-white">Fashion</p>


								<p href="#!" class="text-white">Eduction</p>

								<p href="#!" class="text-white">Food And Drink</p>


							</div>
							<!-- Grid column -->

							<!-- Grid column -->
							<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
								<!-- Links -->
								<h6 class="text-uppercase fw-bold mt-3">Contact</h6>

								<p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
								<p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
								<p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
								<p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
							</div>
							<!-- Grid column -->
						</div>
						<!-- Grid row -->
					</div>
				</section>
				<!-- Section: Links  -->

				<!-- Copyright -->
				<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
					© 2022 Copyright:

				</div>
				<!-- Copyright -->
			</footer>
			<!-- Footer -->

		</div>
	</section>

	<!-- 
    - #GO TO TOP
  -->
  

  <a href="#top" class="go-top" data-go-top aria-label="Go To Top">
    <ion-icon name="chevron-up-outline"></ion-icon>
  </a>

	<!-- End of .container -->
	<!-- footer -->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


	<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script> -->

</body>

</html>