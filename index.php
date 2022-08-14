<?php
include("connection.php");
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

</head>
<script>
    function contact(){
        window.location.href="contact.php";
    }

    function book(){
        window.location.href="booking.php"
    }
</script>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 100%;height:120px;object-fit:contain;" src="./asset/images/weblogo.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tours.html">Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="team.html">Team</a>
                    </li>
                    <li class="nav-item">
                        <button onclick="book()" class="btn custom-btn" type="submit" id="nav-button">Booking Now</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- banner -->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h1 class="heading-h1">Explore Your Travel</h1>
                    <h1 class="heading-h1 mt-4">Trusted Travel Agency</h1>
                    <p class="mt-4">I travel not to go anywhere, but to go. I travel for travel's sake the great affair
                        is to move.</p>
                    <button onclick="contact()" class="btn custom-btn mt-3" type="submit" id="nav-button">Contact Us</button>
                    <button class="btn custom-btn mt-3" type="submit" id="nav-button">Learn More</button>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 travel">
                    <img src="./asset/images/hero-banner.png" alt="">

                </div>
            </div>
        </div>
    </section>
    <!-- banner -->

    <!-- Destinations -->
    <section class="destinations">
        <div class="container">
            <h2 class="sub-heading text-center">Destinations</h2>
            <h1 class=" mt-4 heading-h1 text-center">Choose Your Place</h1>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 col-sm-12 des-img img-text">
                    <img src="./asset/images/destination-1.jpg" alt="">

                



                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 des-img img-text">
                    <img src="./asset/images/destination-2.jpg" alt="">  

                </div>
            </div>
            <div class="row des-img-2">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="./asset/images/destination-3.jpg" alt="" class="img-text">

                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 des-img-2">
                    <img src="./asset/images/destination-4.jpg" alt="" class="img-text">

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 des-img-2">
                    <img src="./asset/images/destination-5.jpg" alt="" class="img-text">
                </div>
            </div>
        </div>
    </section>
    <!-- Destinations -->

    <!-- popular tours -->
    <section class="tours">
        <div class="container">
            <h2 class="sub-heading text-center">Featured Tours</h2>
            <h1 class="mt-4 heading-h1 text-center">Choose Your Place</h1>
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img class="card-img-top" src="./asset/images/popular-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="rupees">From $50.00</div>
                            <p class="card-text mt-4">A good traveler ha sno fixed plans and is not intent in arriving
                            </p>
                            <p class="card-bottom">Kuala Lumpur, Malaysia</p>
                            <button href="#" class="btn custom-btn" type="submit">Go somewhere</button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img class="card-img-top" src="./asset/images/popular-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="rupees">From $50.00</div>
                            <p class="card-text mt-4">A good traveler ha sno fixed plans and is not intent in arriving
                            </p>
                            <p class="card-bottom">Kuala Lumpur, Malaysia</p>
                            <button href="#" class="btn custom-btn" type="submit">Go somewhere</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img class="card-img-top" src="./asset/images/popular-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="rupees">From $50.00</div>
                            <p class="card-text mt-4">A good traveler ha sno fixed plans and is not intent in arriving
                            </p>
                            <p class="card-bottom">Kuala Lumpur, Malaysia</p>
                            <button href="#" class="btn custom-btn" type="submit">Go somewhere</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular tours -->

    <!-- about us -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h2 class="sub-heading">About</h2>
                    <h1 class=" mt-4 heading-h1">Explore all tour of the world with us.</h1>
                    <p class="mt-4">Lorem Ipsum available, but the majority have suffered alteration in some form, by
                        injected humour, or randomised words which don't look even slightly believable.</p>
                    <div class="tour-head">Tour guide</div>
                    <div class="tour-sub-head">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis,
                        temporibus.</div>

                    <div class="mt-4 tour-head">Friendly price</div>
                    <div class="tour-sub-head">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis,
                        temporibus.</div>

                    <div class="mt-4 tour-head">Friendly price</div>
                    <div class="tour-sub-head">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis,
                        temporibus.</div>


                </div>
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <img src="./asset/images/about-banner.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- about us -->

    <!-- latest news -->
    <section class="latest">
        <div class="container">
            <h2 class="sub-heading text-center">From The Blog Post</h2>
            <h1 class="mt-4 heading-h1 text-center">Latest News & Articles</h1>
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img class="card-img-top" src="./asset/images/popular-1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-dp"><img width="40px" src="./asset/images/author-avatar.png"
                                    alt="" class="me-3">Admin</div>
                            <div class="time">10:30 Am</div>
                            <p class="card-text mt-4">A good traveler ha sno fixed plans and is not intent in arriving
                            </p>
                            <p class="card-bottom">Read More</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img class="card-img-top" src="./asset/images/popular-2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-dp"><img width="40px" src="./asset/images/author-avatar.png"
                                    alt="" class="me-3">Admin</div>
                            <div class="time">10:30 Am</div>

                            <p class="card-text mt-4">A good traveler ha sno fixed plans and is not intent in arriving
                            </p>
                            <p class="card-bottom">Read More</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="card">
                        <img class="card-img-top" src="./asset/images/popular-3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="card-dp"><img width="40px" src="./asset/images/author-avatar.png"
                                    alt="" class="me-3">Admin</div>
                            <div class="time">10:30 Am</div>

                            <p class="card-text mt-4">A good traveler ha sno fixed plans and is not intent in arriving
                            </p>
                            <p class="card-bottom">Read More</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest news -->

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
                                <img style="width: 100px;height:100px; border-radius: 50%;" src="./asset/images/weblogo.jpg" alt="">
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

    <!-- End of .container -->
    <!-- footer -->
    <!-- back to top button -->
    <div class="col-lg-12 col-md-12 col-sm-12">
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>
         
    </div>
    <!-- back to top button -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script> -->

</body>

</html>