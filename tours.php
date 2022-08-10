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
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img style="width: 100%;height:120px;object-fit:contain;" src="./asset/images/weblogo.jpg" alt=""></a</a>
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
    <section class="banner-4 d-flex justify-content-center align-items-center">
        <div class="headings">
            <p class="text-white display-4">Tours</p>
        </div>
    </section>
    <!-- banner -->

    <!-- hero -->
    <section class="hero-4">
        <div class="container">
            <div class="row m-0 p-0">
                <div class="col-lg-3 col-md-12 col-sm-12" data-aos="fade-right">
                    <img src="./asset/images/tour-1.jpg" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12" >
                    <p class="fw-bold mt-2">Weekend In Europe,London</p>
                    <i class="fa-solid fa-clock-rotate-left icon mt-2">&nbsp;
                        5 DAys
                    </i>
                    &nbsp;<p class="mt-2 ml-5 tour-des">For a long time, London was a small city. All its people lived
                        inside the
                        walls that were built
                        by the Romans. This area is still called the City of London. </p>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="vertical mt-3">
                        <div class="content-right ms-5">
                            <p>From</p>
                            <p class="text-black  fw-bold">$2,400</p>
                            <button class="btn custom-btn" type="submit" id="nav-button">Veiw Details</button>

                        </div>

                    </div>
                </div>

                <!-- second row -->
                <div class="col-lg-3 col-md-12 col-sm-12 mt-5" data-aos="fade-left">
                    <img src="./asset/images/tour-2.jpg" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                    <p class="fw-bold">Mexican Holiday Tour</p>
                    <i class="fa-solid fa-clock-rotate-left icon mt-2">&nbsp;
                        7 DAys
                    </i>
                    &nbsp;<p class="mt-2 ml-5 tour-des">Fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem
                        sequi nesciunteque porro quisqu dolorem ipsum quia dolo sit amet, consectetur.
                       </p>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="vertical mt-3">
                        <div class="content-right ms-5">
                            <p>From</p>
                            <p class="text-black  fw-bold">$3,200</p>
                            <button class="btn custom-btn" type="submit" id="nav-button">Veiw Details</button>

                        </div>

                    </div>
                </div>
                <!-- second row -->

                <!-- third row -->
                <div class="col-lg-3 col-md-12 col-sm-12 mt-5" data-aos="fade-up-right">
                    <img src="./asset/images/tour-3.jpg" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                    <p class="fw-bold">Paris Vacation Tour</p>
                    <i class="fa-solid fa-clock-rotate-left icon mt-2">&nbsp;
                        7 DAys
                    </i>
                    &nbsp;<p class="mt-2 ml-5 tour-des">Fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunteque porro quisqu dolorem ipsum quia dolo sit amet, consectetur.
                        </p>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="vertical mt-3">
                        <div class="content-right ms-5">
                            <p>From</p>
                            <p class="text-black  fw-bold">$2,680</p>
                            <button class="btn custom-btn" type="submit" id="nav-button">Veiw Details</button>

                        </div>

                    </div>
                </div>
                <!-- third row -->


                <!-- fourth row -->
                <div class="col-lg-3 col-md-12 col-sm-12 mt-5" data-aos="zoom-in-down">
                    <img src="./asset/images/tour-4.jpg" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                    <p class="fw-bold">Hot days Venice Tour</p>
                    <i class="fa-solid fa-clock-rotate-left icon mt-2">&nbsp;
                        7 DAys
                    </i>
                    &nbsp;<p class="mt-2 ml-5 tour-des">Fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunteque porro quisqu dolorem ipsum quia dolo sit amet, consectetur.
                      
                 </p>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="vertical mt-3">
                        <div class="content-right ms-5">
                            <p>From</p>
                            <p class="text-black  fw-bold">$3,700</p>
                            <button class="btn custom-btn" type="submit" id="nav-button">Veiw Details</button>

                        </div>

                    </div>
                </div>
                <!-- fourth row -->


                <!-- Fifth row -->
                <div class="col-lg-3 col-md-12 col-sm-12 mt-5" data-aos="zoom-in-left">
                    <img src="./asset/images/tour-5.jpg" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                    <p class="fw-bold">Spain Bus Tour</p>
                    <i class="fa-solid fa-clock-rotate-left icon mt-2">&nbsp;
                        7 DAys
                    </i>
                    &nbsp;<p class="mt-2 ml-5 tour-des">Fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem
                        sequi nesciunteque porro quisqu dolorem ipsum quia dolo sit amet, consectetur.
                       </p>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="vertical mt-3">
                        <div class="content-right ms-5">
                            <p>From</p>
                            <p class="text-black  fw-bold">$3,200</p>
                            <button class="btn custom-btn" type="submit" id="nav-button">Veiw Details</button>

                        </div>

                    </div>
                </div>
                 <!-- Fifth row -->


                <!-- sixth row -->
                <div class="col-lg-3 col-md-12 col-sm-12 mt-5" data-aos="flip-down">
                    <img src="./asset/images/tour-6.jpg" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                    <p class="fw-bold">Thailand Summer Tour</p>
                    <i class="fa-solid fa-clock-rotate-left icon mt-2">&nbsp;
                        7 DAys
                    </i>
                    &nbsp;<p class="mt-2 ml-5 tour-des">Fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunteque porro quisqu dolorem ipsum quia dolo sit amet, consectetur.
                </p>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="vertical mt-3">
                        <div class="content-right ms-5">
                            <p>From</p>
                            <p class="text-black  fw-bold">$2,680</p>
                            <button class="btn custom-btn" type="submit" id="nav-button">Veiw Details</button>

                        </div>

                    </div>
                </div>
                <!--sixth row -->


                <!-- seventh row -->
                <div class="col-lg-3 col-md-12 col-sm-12 mt-5"  data-aos="flip-up">
                    <img src="./asset/images/tour-7.jpg" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                    <p class="fw-bold">Amazon To The Andes</p>
                    <i class="fa-solid fa-clock-rotate-left icon mt-2">&nbsp;
                        7 DAys
                    </i>
                    &nbsp;<p class="mt-2 ml-5 tour-des">Fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunteque porro quisqu dolorem ipsum quia dolo sit amet, consectetur.
                      </p>

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="vertical mt-3">
                        <div class="content-right ms-5">
                            <p>From</p>
                            <p class="text-black fw-bold">$3,700</p>
                            <button class="btn custom-btn" type="submit" id="nav-button">Veiw Details</button>

                        </div>

                    </div>
                </div>
                <!-- seventh row -->

                 <!-- eight row -->
                 <div class="col-lg-3 col-md-12 col-sm-12 mt-5" data-aos="fade-up">
                    <img src="./asset/images/tour-8.jpg" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 mt-5">
                    <p class="fw-bold">Vienna All Through</p>
                    <i class="fa-solid fa-clock-rotate-left icon mt-2">&nbsp;
                        7 DAys
                    </i>
                    &nbsp;<p class="mt-2 ml-5 tour-des">Fugit, sed quia consequuntur magni dolores eos qui ratione
                        voluptatem sequi nesciunteque porro quisqu dolorem ipsum quia dolo sit amet, consectetur.

                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 mt-5">
                    <div class="vertical mt-3">
                        <div class="content-right ms-5">
                            <p>From</p>
                            <p class="text-black fw-bold">$3,700</p>
                            <button class="btn custom-btn" type="submit" id="nav-button">Veiw Details</button>

                        </div>

                    </div>
                </div>
                <!-- eight row -->


            </div>

        </div>
    </section>
    <!-- hero -->

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
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>

</html>