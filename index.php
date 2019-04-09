<?php

// set the variable to 0, it'll matter only if the cookie for the variable is not set
$countVisit = 0;
// if cookie is set for the variable, it'll go to $countVisit and get added by 1; otherwise it'll show 0 for tha variable
if(isset($_COOKIE['countVisit'])){
$countVisit = $_COOKIE['countVisit'];
$countVisit ++;
}
// if the last visist cookie is set, it'll pass the value to $lastVisit, and it'll be displayed below;
if(isset($_COOKIE['lastVisit'])){
$lastVisit = $_COOKIE['lastVisit'];
}
// set cookie for countVisit
setcookie('countVisit', $countVisit,  time()+3600);
// set cookie for last visit
setcookie('lastVisit', date("d-m-Y"));
// show the respected values
// is the variable is not set, say 'welcome', otherwise show the info about visit number and last visit date
if($countVisit == 0){
echo "Welcome";
} else {
echo "This is your visit number ".$countVisit;
echo '<br>';
echo "Last time, you were here ".$lastVisit;
}

?> 

<?php

include("visitors.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>UGN | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div>
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
            <span>Wait, please...</span>
        </div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Area Start -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close Button -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="fa fa-times"></i></button>
                        <!-- Form -->

                        <form action="index.html" method="post">
                          <!--    <input type="text" name="top-search-bar" onkeyup="myFunction()" class="form-control" placeholder="Type keywords and hit enter...">-->

                            <style>
          * {
            box-sizing: border-box;
          }

          #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
          }

          #myUL {
            list-style-type: none;
            padding: 0;
            margin: 0;
          }

          #myUL li a {
            border: 1px solid #ddd;
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6;
            padding: 12px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block
          }

          #myUL li a:hover:not(.header) {
            background-color: #eee;
          }
          </style>
          </head>
          <body>

          <h2>Search Bands</h2>

          <input type="text" id="myInput" onkeyup="showHint(this.value)" placeholder="Search for names.." title="Type in a name">
          <ul id="myUL">
          Suggestions:
          <li><a href="#" id="txtHint"></a></li>
          </ul>
          <!--   <h3>What other people have searched for..</h3>
          <ul id="myUL">
            <li><a href="http://localhost/UGN/poca/bandprofile.php">Nemesis</a></li>
            <li><p>Suggestions: <span id="txtHint"></span></p></li>

            <li><a href="#">Artcell</a></li>
            <li><a href="#">Martian Love</a></li>

            <li><a href="#">Owned</a></li>
            <li><a href="#">Conclusion</a></li>
            <li><a href="#">Attic</a></li>
          </ul>
-->

          <script>
          function showHint(str) {
              if (str.length == 0) {
                  document.getElementById("txtHint").innerHTML = "";
                  return;
              } else {
                  var xmlhttp = new XMLHttpRequest();
                  xmlhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("txtHint").innerHTML = this.responseText;
                      }
                  };
                  xmlhttp.open("GET", "search.php?q=" + str, true);
                  xmlhttp.send();
              }
          }
          </script>

          <script>
          function myFunction() {
              var input, filter, ul, li, a, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              ul = document.getElementById("myUL");
              li = ul.getElementsByTagName("li");
              for (i = 0; i < li.length; i++) {
                  a = li[i].getElementsByTagName("a")[0];
                  txtValue = a.textContent || a.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      li[i].style.display = "";
                  } else {
                      li[i].style.display = "none";
                  }
              }
          }
          </script>

                            <button type="submit">Search</button>
                        </form>
                        <!-- Search Button -->
                        <div class="search-btn"><i class="icon_search"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Search Area End -->

    <!-- Social Share Area Start -->
    <div class="razo-social-share-area">
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
        <a href="#" class="ss-close-btn"><i class="arrow_right"></i></a>
    </div>
    <!-- Social Share Area End -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="razoNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="index.html"><img src="./img/core-img/logo3.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="./band.php">Bands</a></li>
                                    <li><a href="./events.html">Events</a></li>
                                    <li><a href="./blog.html">Blog</a></li>
                                    <li><a href="./login.html">Login</a></li>
                                    <li><a href="./registration.html">Sign Up</a></li>

                                </ul>

                                <!-- Share Icon -->
                                <div class="social-share-icon">
                                    <i class="social_share"></i>
                                </div>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal">
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/home.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-9 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUpBig" data-delay="100ms">Designed For Music, Engineered to Last</h2>
                                    <h5 data-animation="fadeInUpBig" data-delay="400ms">Upcoming show, 7th March....Don't miss it</h5>
                                    <a href="#" class="btn razo-btn btn-2" data-animation="fadeInUpBig" data-delay="700ms">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/30.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-10 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Designed For Music, Engineered to Last</h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">Upcoming show, 7th March....Don't miss it</h5>
                                    <a href="#" class="btn razo-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/32.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-10 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Designed For Music, Engineered to Last</h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">Upcoming show, 7th March....Don't miss it</h5>
                                    <a href="#" class="btn razo-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(img/bg-img/33.jpg);">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center justify-content-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-md-10 col-lg-6">
                                <div class="welcome-text text-center">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Designed For Music, Engineered to Last</h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">Upcoming show, 7th March....Don't miss it</h5>
                                    <a href="#" class="btn razo-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Welcome Area End -->


    <!-- About Section Start -->
    <section class="razo-app-download-area section-padding-80-0 bg-img bg-overlay jarallax" id="about" style="background-image: url(img/bg-img/21.jpg);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="app-download-text mb-80">
                        <h2>About</h2>
                        <p>UGN is an online platform for the underground bands and musicians of Bangladesh to help them promote their music, their covers and their upcoming shows.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section End -->


    <!-- Blog Area Start -->
    <section class="razo-blog-area section-padding-80-0">
        <div class="container">
            <div class="row">
                <!-- Weekly News Area -->
                <div class="col-12 col-md-8">
                    <div class="weekly-news-area mb-50">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>Blog New</h2>
                        </div>

                        <!-- Featured Post Area -->
                        <div class="featured-post-area bg-img bg-overlay mb-30" style="background-image: url(img/bg-img/bangla_band_music_nemesis.jpg);">
                            <!-- Post Overlay -->
                            <div class="post-overlay">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Nemesis releases new song : Ami</a>
                            </div>
                        </div>

                        <div class="row">

                            <!-- Single Post Area -->
                            <div class="col-12 col-md-6">
                                <div class="razo-single-post d-flex mb-30">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html"><img src="img/bg-img/13.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                        </div>
                                        <a href="single-blog.html" class="post-title">Drug bust leads police to underground tunnel</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class="col-12 col-md-6">
                                <div class="razo-single-post d-flex mb-30">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html"><img src="img/bg-img/14.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                        </div>
                                        <a href="single-blog.html" class="post-title">Hear abuse victims' messages for the Pope</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class="col-12 col-md-6">
                                <div class="razo-single-post d-flex mb-30">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html"><img src="img/bg-img/15.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                        </div>
                                        <a href="single-blog.html" class="post-title">New Mexico uspects' attorneys file to have all</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Post Area -->
                            <div class="col-12 col-md-6">
                                <div class="razo-single-post d-flex mb-30">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="single-blog.html"><img src="img/bg-img/16.jpg" alt=""></a>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                        </div>
                                        <a href="single-blog.html" class="post-title">Trump tweets false white supremacist talking</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Trending News Area -->
                <div class="col-12 col-md-4">
                    <div class="trending-news-area mb-50">

                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>Trending</h2>
                        </div>

                        <!-- Featured Post Area -->
                        <div class="featured-post-area small-featured-post bg-img bg-overlay mb-30" style="background-image: url(img/bg-img/12.jpg);">
                            <!-- Post Overlay -->
                            <div class="post-overlay">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Hawaii braces for Hurricane Lane</a>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="razo-single-post d-flex mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="img/bg-img/17.jpg" alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Hurricane Lane brings 19 inches of rain</a>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="razo-single-post d-flex mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="img/bg-img/18.jpg" alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">What these victims want the Pope to know</a>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="razo-single-post d-flex mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="img/bg-img/19.jpg" alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">What happens if you don't have a will?</a>
                            </div>
                        </div>

                        <!-- Single Post Area -->
                        <div class="razo-single-post d-flex mb-30">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <a href="single-blog.html"><img src="img/bg-img/20.jpg" alt=""></a>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 2.1k</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 3.6k</a>
                                </div>
                                <a href="single-blog.html" class="post-title">Giuliani: No reason for Trump impeachment</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->






    <!-- Footer Area Start -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-80-0">
            <div class="container">
                <div class="row justify-content-between">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                            <a href="#" class="footer-logo"><img src="img/core-img/logo4.png" alt=""></a>

                            <p class="mb-30">To know more, please feel free to give us a call or email us. We try to be as responsive as possible. Thank you.</p>

                            <!-- Footer Content -->
                            <div class="footer-content">

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="icon">
                                        <i class="icon_pin"></i>
                                    </div>
                                    <div class="text">
                                        <p>Dhaka, Bangladesh</p>
                                    </div>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="icon">
                                        <i class="icon_phone"></i>
                                    </div>
                                    <div class="text">
                                        <p>+88017888888</p>
                                    </div>
                                </div>

                                <!-- Single Contact Info -->
                                <div class="single-contact-info d-flex">
                                    <div class="icon">
                                        <i class="icon_mail_alt"></i>
                                    </div>
                                    <div class="text">
                                        <p>undergroundNation@gmail.com</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">

                            <!-- Widget Title -->
                            <h4 class="widget-title">Twitter Feed</h4>

                            <!-- Single Twitter Feed -->
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="tweet">
                                    <p><a href="#">Kerem Suer</a> @kerem American conducts it first ever done strike Qaeda</p>
                                </div>
                            </div>

                            <!-- Single Twitter Feed -->
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="tweet">
                                    <p><a href="#">Axel Hervelle</a> @axel_hervelle Tens of thousands attend rallies held in D.C.</p>
                                </div>
                            </div>

                            <!-- Single Twitter Feed -->
                            <div class="single-twitter-feed d-flex">
                                <div class="tweet-icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <div class="tweet">
                                    <p><a href="#">Chris Pratt</a> @chris_pratt Hundreds of protesters shut down meeting.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-md-4 col-xl-3">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Instagram</h4>

                            <!-- Instagram Area -->
                            <div class="razo-instagram-area d-flex flex-wrap">
                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/2.jpg" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/3.jpg" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/4.jpg" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/5.jpg" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/6.jpg" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/7.jpg" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/8.jpg" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/9.jpg" alt=""></a>
                                </div>

                                <!-- Single Instagram Feed -->
                                <div class="single-instagram-feed">
                                    <a href="#"><img src="img/bg-img/10.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Footer Area End -->

        <!-- Copywrite Text -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/razo.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>
