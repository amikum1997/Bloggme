<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Bloggme</title>
    <!--Including BootstrapCDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

</head>

<body>
    <!--Creating Logo Header In center of webpage-->
    <div class="container-fluid">
        <div class="logo-header">
            <img src="./img/bloggme.PNG" class="rounded mx-auto d-block" alt="logo">
        </div>
        <!--Creating Navbar from bootstrap 4 components-->
        <nav class="navbar navbar-expand-md navbar-light justify-content-center">

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto pl-5">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Travels</a>
                    <a href="#" class="nav-item nav-link">Fashion</a>
                    <a href="#" class="nav-item nav-link">Technology</a>
                    <a href="#" class="nav-item nav-link">News</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="php/user/index.php" class="nav-item nav-link">Login/Register</a>
                </div>
            </div>
        </nav>
        <!--End of navigation bar-->
        <hr>
        <!--Start of section 1 *#Trending blogs#* -->
        <section class="trending">
            <div class="cards">
                <a href="fashion_blog.html">
                    <div class="card">ONE</div>
                </a>
                <div class="card">TWO</div>
                <div class="card">THREE</div>
                <div class="card">FOUR</div>
                <div class="card">FIVE</div>
                <div class="card">SIX</div>
                <div class="card">SEVEN</div>
                <div class="card">EIGHT</div>
                <div class="card">NINE</div>
                <div class="card">TEN</div>
                <div class="card">ELEVEN</div>
                <div class="card">TWELVE</div>
            </div>

        </section>
        <hr>
        <!--Creating Footer-->
        <footer class="footer-section">
            <div class="container">
                <div class="footer-cta pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fa fa-map"></i>
                                <div class="cta-text">
                                    <h4>Find us</h4>
                                    <span>Lovely Professional University</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fa fa-phone"></i>
                                <div class="cta-text">
                                    <h4>Call us</h4>
                                    <span>6386367956</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 mb-30">
                            <div class="single-cta">
                                <i class="fa fa-envelope-open"></i>
                                <div class="cta-text">
                                    <h4>Mail us</h4>
                                    <span>amikum9707@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-content pt-5 pb-5">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 mb-50">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="./img/bloggme.PNG" class="img-fluid" alt="logo"></a>
                                </div>
                                <div class="footer-text">
                                    <p>Best trending blogs Just not read but to explore.</p>
                                </div>
                                <div class="footer-social-icon">
                                    <span>Follow us</span>
                                    <a href="#"><i class="fa fa-facebook facebook-bg"></i></a>
                                    <a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
                                    <a href="#"><i class="fa fa-google google-bg"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Useful Links</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Home</a></li>
                             
                                    <li><a href="#">services</a></li>
                                    <li><a href="#">portfolio</a></li>
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">Expert Team</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                    <li><a href="#">Latest News</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                            <div class="footer-widget">
                                <div class="footer-widget-heading">
                                    <h3>Subscribe</h3>
                                </div>
                                <div class="footer-text mb-25">
                                    <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                                </div>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="text" placeholder="Email Address">
                                        <button><i class="fa fa-envelope"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                            <div class="copyright-text">
                                <p>Copyright &copy; 2020, All Right Reserved <a href="#">Amit kumar and abhisekh
                                        sahoo</a></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Policy</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End of Contianer Fluid-->
    </div>


</body>

</html>