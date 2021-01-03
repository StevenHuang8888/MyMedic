<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>MyMedic - Medicine Shop</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url('assets/front/images/') ?>logox.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= base_url('assets/front/images/') ?>logo.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/front/') ?>css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                            <option>IDR</option>
                        </select>
                    </div>
                    <div class="right-phone-box">
                        <p>Call INA :- <a href="<?= base_url('assets/front/') ?>">+62 888 888 9 888</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="<?= base_url('assets/front/') ?>"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="<?= base_url('assets/front/') ?>"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="<?= base_url('assets/front/') ?>"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="login-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                            <option>Register Here</option>
                            <option>Sign In Here</option>
                        </select>
                    </div>
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 50% off Entire Free Shiping Promo code: NEWYEAR21
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Mask
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vitamin
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Antibiotics
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: JAN21
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('assets/front/') ?>index.html"><img src="<?= base_url('assets/front/') ?>images/logo.png" class="logo" alt="" width="200px"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('application/views/home/') ?>about.html">About Us</a></li>
                        <li class="dropdown">
                            <a href="<?= base_url('assets/front/') ?>" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('assets/front/') ?>shop.html">Sidebar Shop</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>shop-detail.html">Shop Detail</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>cart.html">Cart</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>checkout.html">Checkout</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>my-account.html">My Account</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>wishlist.html">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="<?= base_url('assets/front/') ?>"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu">
                            <a href="<?= base_url('assets/front/') ?>">
                                <i class="fa fa-shopping-bag"></i>
                                <span class="badge">3</span>
                                <p>My Cart</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="<?= base_url('assets/front/') ?>" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="<?= base_url('assets/front/') ?>" class="photo"><img src="<?= base_url('assets/front/') ?>images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="<?= base_url('assets/front/') ?>">Delica omtantur </a></h6>
                            <p>1x - <span class="price">$80.00</span></p>
                        </li>
                        <li>
                            <a href="<?= base_url('assets/front/') ?>" class="photo"><img src="<?= base_url('assets/front/') ?>images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="<?= base_url('assets/front/') ?>">Omnes ocurreret</a></h6>
                            <p>1x - <span class="price">$60.00</span></p>
                        </li>
                        <li>
                            <a href="<?= base_url('assets/front/') ?>" class="photo"><img src="<?= base_url('assets/front/') ?>images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                            <h6><a href="<?= base_url('assets/front/') ?>">Agam facilisis</a></h6>
                            <p>1x - <span class="price">$40.00</span></p>
                        </li>
                        <li class="total">
                            <a href="<?= base_url('assets/front/') ?>" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: $180.00</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="<?= base_url('assets/front/') ?>images/banner-01.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MyMedic</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?= base_url('assets/front/') ?>images/banner-02.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MyMedic</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="<?= base_url('assets/front/') ?>images/banner-03.png" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MyMedic</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends
                                to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="<?= base_url('assets/front/') ?>" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="<?= base_url('assets/front/') ?>" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/front/') ?>images/MenuApotek.png" alt="" />
                        <a class="btn hvr-hover" href="#">Store Medicine Near You</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/front/') ?>images/MenuObat.png" alt="" />
                        <a class="btn hvr-hover" href="#">Search Medicine</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="<?= base_url('assets/front/') ?>images/MenuDiagnosaKeluhan.png" alt="" />
                        <a class="btn hvr-hover" href="#">Search Disease</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="<?= base_url('assets/front/') ?>images/Berita1.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>7 Buah untuk Meningkatkan Daya Tahan Tubuh</h3>
                                <p>Sistem daya tahan tubuh dapat dipahami secara sederhana sebagai sistem kerja tubuh untuk melawan penyakit.
                                    Sistem ini akan bekerja melindungi tubuh dari serangan organisme atau kuman yang dapat menyebabkan penyakit.
                                    Oleh sebab itu, sistem daya tahan tubuh penting untuk terus dijaga agar kita bisa terhindar dari kemungkinan terjangkit atau tertular penyakit.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="far fa-heart"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fas fa-eye"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="<?= base_url('assets/front/') ?>images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet
                                    urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed
                                    mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="far fa-heart"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fas fa-eye"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="<?= base_url('assets/front/') ?>images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet
                                    urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed
                                    mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="far fa-heart"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fas fa-eye"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog  -->

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 08.00am to 05.00pm</li>
                                <li>Saturday: 10.00am to 08.00pm</li>
                                <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Newsletter</h3>
                            <form class="newsletter-box">
                                <div class="form-group">
                                    <input class="" type="email" name="Email" placeholder="Email Address*" />
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn hvr-hover" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="<?= base_url('assets/front/') ?>"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Freshshop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="<?= base_url('assets/front/') ?>">About Us</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>">Customer Service</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>">Our Sitemap</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>">Terms &amp; Conditions</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>">Privacy Policy</a></li>
                                <li><a href="<?= base_url('assets/front/') ?>">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Jl. Jendral Sudirman Pekanbaru <br>Riau Indonesia<br> 28116 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+62 888 888 9 888</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mymedic8888@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="#">MyMedic</a> Design By :
            <a href="https://www.instagram.com/stevnhuang/">Steven Huang</a>
        </p>
    </div>
    <!-- End copyright  -->

    <a href="<?= base_url('assets/front/') ?>" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?= base_url('assets/front/') ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url('assets/front/') ?>js/jquery.superslides.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/bootstrap-select.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/inewsticker.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/bootsnav.js."></script>
    <script src="<?= base_url('assets/front/') ?>js/images-loded.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/isotope.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/baguetteBox.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/form-validator.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/contact-form-script.js"></script>
    <script src="<?= base_url('assets/front/') ?>js/custom.js"></script>
</body>

</html>