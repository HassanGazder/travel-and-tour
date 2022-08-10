<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Travel And Tour</title>
    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Counts JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

</head>

<body>

    <!-- back to top button -->

    <!-- back to top button -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 100%;height:120px;object-fit:contain;" src="./asset/images/weblogo.jpg" alt=""></a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
    <div class="div"></div>
    <section class="banner-3 d-flex justify-content-center align-items-center">
        <div class="headings">
            <p class="text-white">IMAGES AND VIDEOS</p>
            <h1 class="text-white fw-bold display-4">IMAGE <span>&</span> VIDEO <span>GALLERY</span></h1>
        </div>
    </section>
    <!-- banner -->

    <!-- images gallery -->
    <section class="images-gallery">
        <div class="container">
            <p class="px-5 display-7">IMAGES</p>
            <p class="px-5 display-4 fw-bold">IMAGE <span>GALLERY</span></p>

            <div class="row px-5 mt-5">
                <div class="col-lg-4 col-md-12 col-sm-12 geek">
                    <img src="./asset/images/gallery-4.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 geek">
                    <img src="./asset/images/gallery-5.jpg" alt="">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 geek">
                    <img src="./asset/images/gallery-6.jpg" alt="">
                </div>

                <!-- row 2 -->
                <div class="col-lg-6 col-md-12 col-sm-12 mt-2 geek">
                    <img src="./asset/images/gallery-7.jpg" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-2 geek">
                    <img src="./asset/images/gallery-8.jpg" alt="">
                </div>
                <!-- row 2 -->

            </div>
        </div>
    </section>
    <!-- images gallery -->

    <!-- videos gallery -->
    <section class="videos-gallery">
        <div class="container py-5">
            <p class="px-5 display-7">Videos</p>
            <p class="px-5 display-4 fw-bold">Videos <span>GALLERY</span></p>

            <div class="row px-5">
                <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                    <img src="./asset/images/gallery-7.jpg" alt="">
                    <div class="video-gallery-icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 mt-2">
                    <img src="./asset/images/gallery-8.jpg" alt="">
                    <div class="video-gallery-icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                </div>

                <!-- row-2 -->
                <div class="col-lg-4 col-md-12 col-sm-12 second-row">
                    <img src="./asset/images/gallery-4.jpg" alt="">
                    <div class="video-gallery-icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 second-row">
                    <img src="./asset/images/gallery-5.jpg" alt="">
                    <div class="video-gallery-icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 second-row">
                    <img src="./asset/images/gallery-6.jpg" alt="">
                    <div class="video-gallery-icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                </div>
                <!-- row-2 -->
            </div>
        </div>
    </section>
    <!-- videos gallery -->


    <!-- top destinations -->
    <section class="top-destinations ">
        <div class="row m-0 d-flex justify-content-center align-items-center">
            <div class="col-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <p class="fw-bold text-white left-head mt-3">We Provide Top Destinations Expecially For You Book Now and
                    Enjoy!</p>
                <p class="text-white">Call Now</p>
                <p class="text-white">855 333 4444</p>
                <p class="text-white">Call Us Its Toll Free</p>

            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                <div class="testomoinials">
                    <div class="head-box">
                        <p class="main-head">TESTIMONIALS</p>
                        <p class="fw-bold sub-head">TRAVELERS REVIEWS</p>
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators mb-0">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active slider-button" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2" class="slider-button"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3" class="slider-button"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti adipisci
                                        blanditiis delectus accusamus quae voluptate suscipit magni quo illum vel?</p>
                                    <div class="image-content">
                                        <img src="./asset/images/author-avatar.png" alt="" class="me-3">
                                        John
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti adipisci
                                        blanditiis delectus accusamus quae voluptate suscipit magni quo illum vel?</p>
                                    <div class="image-content">
                                        <img src="./asset/images/author-avatar.png" alt="" class="me-3">
                                        John

                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti adipisci
                                        blanditiis delectus accusamus quae voluptate suscipit magni quo illum vel?</p>
                                    <div class="image-content">
                                        <img src="./asset/images/author-avatar.png" alt="" class="me-3">
                                        John

                                    </div>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-1"></div>

        </div>

    </section>
    <!-- top destinations -->

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
                    © 202 Copyright:

                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->

        </div>
    </section>

    <!-- End of .container -->
    <!-- footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <!-- <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>