<?php 
include("connection.php");

$check = "SELECT bandName,img FROM bandlist WHERE id=9";

if(mysqli_query($conn,$check)){
    echo "success";
}
else
echo "failed" ;


$result = mysqli_query($conn,$check);

 $i=1;
if(mysqli_num_rows($result)>0){
    echo "result";

while($row = mysqli_fetch_assoc($result)){

    $name[$i] = $row['bandName'];
    $image[$i] = $row['img'];
    $i=$i+1;
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Poca - Podcast &amp; Audio Template">
  
   

    <!-- Title -->
    <title> <?php echo $name[1];?> | Home</title>

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
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Type keywords and hit enter...">
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
                                    <li><a href="#Events">Events</a></li>
                                    <li><a href="#Members">Members</a></li>
                                    <li><a href="./login.php">Login</a></li>
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
            <div class="poca-music-area mt-100 d-flex align-items-center flex-wrap" data-animation="fadeInUp" data-delay="900ms">
                <div class="poca-music-thumbnail">
                  <img src="./img/bg-img/4.jpg" alt="">
                </div>
                <div class="poca-music-content">
                  <span class="music-published-date">December 9, 2018</span>
                  <h2>Episode 203 - The Last Blockbuster</h2>
                  <div class="music-meta-data">
                    <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
                  </div>
            <!-- Music Player -->
                  <div class="poca-music-player">
                    <audio preload="auto" controls>
                      <source src="audio/dummy-audio.mp3">
                    </audio>
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

    
    <!-- About section End -->


    <!-- Member Area Start -->
    <section class="razo-app-download-area section-padding-80-0 bg-img bg-overlay jarallax"  >
        <section class="featured-guests-area" >
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="app-download-text mb-80">
            <h2>Members</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>

      <div class="row justify-content-around">
        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="app-download-text mb-80">
            <img src="img/bg-img/25.jpg" alt="">
            <div class="app-download-text mb-80">
              <h5>Alfred Day</h5>
              <span>PRODUCER</span>
            </div>
          </div>
        </div>

        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="app-download-text mb-80">
            <img src="img/bg-img/26.jpg" alt="">
            <div class="app-download-text mb-80">
              <h5>Jayden White</h5>
              <span>DRUMMER</span>
            </div>
          </div>
        </div>

        <!-- Single Featured Guest -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="single-featured-guest mb-80">
            <img src="img/bg-img/27.jpg" alt="">
            <div class="guest-info">
              <h5>Vincent Reid</h5>
              <span>ENTREPRENEUR</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    </section>
    </section>


     <!-- Single Footer Widget -->
    
<section class="poca-latest-epiosodes section-padding-80">
    <div class="container">
      <div class="row">
        <!-- Section Heading -->
        <div class="col-12">
          <div class="section-heading text-center">
            <h2>Latest Episodes</h2>
            <div class="line"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Projects Menu -->
    <div class="container">
      <div class="poca-projects-menu mb-30 wow fadeInUp" data-wow-delay="0.3s">
        <div class="text-center portfolio-menu">
          <button class="btn active" data-filter="*">All</button>
          <button class="btn" data-filter=".entre">Entrepreneurship</button>
          <button class="btn" data-filter=".media">Media</button>
          <button class="btn" data-filter=".tech">Tech</button>
          <button class="btn" data-filter=".tutor">Tutorials</button>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row poca-portfolio">

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item entre wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="./img/bg-img/5.jpg" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 201 - You Don’t Know Squat!</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item entre tutor wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="./img/bg-img/6.jpg" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 202 - I Want A New Judge!</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="./img/bg-img/7.jpg" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 203 - The Last Blockbuster</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item media wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="./img/bg-img/8.jpg" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 204 - The Last Blockbuster</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item tech tutor wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="./img/bg-img/9.jpg" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 205 - See Ya In Three!</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Single gallery Item -->
        <div class="col-12 col-md-6 single_gallery_item tech wow fadeInUp" data-wow-delay="0.2s">
          <!-- Welcome Music Area -->
          <div class="poca-music-area style-2 d-flex align-items-center flex-wrap">
            <div class="poca-music-thumbnail">
              <img src="./img/bg-img/10.jpg" alt="">
            </div>
            <div class="poca-music-content text-center">
              <span class="music-published-date mb-2">December 9, 2018</span>
              <h2>Episode 206 - Let’s Get This Party Started!</h2>
              <div class="music-meta-data">
                <p>By <a href="#" class="music-author">Admin</a> | <a href="#" class="music-catagory">Tutorials</a> | <a href="#" class="music-duration">00:02:56</a></p>
              </div>
              <!-- Music Player -->
              <div class="poca-music-player">
                <audio preload="auto" controls>
                  <source src="audio/dummy-audio.mp3">
                </audio>
              </div>
              <!-- Likes, Share & Download -->
              <div class="likes-share-download d-flex align-items-center justify-content-between">
                <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> Like (29)</a>
                <div>
                  <a href="#" class="mr-4"><i class="fa fa-share-alt" aria-hidden="true"></i> Share(04)</a>
                  <a href="#"><i class="fa fa-download" aria-hidden="true"></i> Download (12)</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn poca-btn mt-70">Load More</a>
        </div>
      </div>
    </div>
  </section>
    


    <!-- Weekly Sehedule Area Start -->
    <section class="razo-weekly-schedule-area section-padding-80" id="Events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="weekly-schedule-table table-responsive">
                        <!-- Section Heading -->
                        <div class="col-12">
                            <div class="section-heading text-center">
                                <h2>Weekly Sehedule</h2>
                            </div>
                        </div>

                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <p>Monday</p>
                                    </th>
                                    <th scope="col">
                                        <p>Tuesday</p>
                                    </th>
                                    <th scope="col">
                                        <p>Wednesday</p>
                                    </th>
                                    <th scope="col">
                                        <p>Thursday</p>
                                    </th>
                                    <th scope="col">
                                        <p>Friday</p>
                                    </th>
                                    <th scope="col">
                                        <p>Saturday</p>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <p>As BBC Radio 5 live</p>
                                        <span>01:00 am - 02:30 am</span>
                                    </th>
                                    <td>
                                        <h5>Andrew Peach Birthday Surprise!</h5>
                                        <span>13:00 pm - 16:00 pm</span>
                                    </td>
                                    <td>
                                        <h5>As BBC Radio 5 live</h5>
                                        <span>23:00 pm - 02:00 am</span>
                                    </td>
                                    <td>
                                        <h5>Berkshire Sport: Extra Time</h5>
                                        <span>01:00 am - 03:30 am</span>
                                    </td>
                                    <td>
                                        <h5>As BBC Radio 5 live</h5>
                                        <span>01:00 am - 02:30 am</span>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <p>Berkshire Sport: Extra Time</p>
                                        <span>05:30 am - 06:30 am</span>
                                    </th>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <h5>Tony Blackburn on BBC Radio</h5>
                                        <span>03:00 am - 05:00 am</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Stereo Underground</h5>
                                        <span>03:00 am - 05:00 am</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <h5>BBC Music Introducing in</h5>
                                        <span>10:00 am - 12:00 pm</span>
                                    </td>
                                    <td>
                                        <h5>Stereo Underground</h5>
                                        <span>13:00 pm - 15:00 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Sport on BBC Radio Berkshire</h5>
                                        <span>07:00 am - 09:30 am</span>
                                    </td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <p>Andrew Peach Birthday Surprise!</p>
                                        <span>13:00 pm - 16:00 pm</span>
                                    </th>
                                    <td>
                                    </td>
                                    <td>
                                        <h5>BBC Music Introducing in</h5>
                                        <span>17:00 pm - 20:00 pm</span>
                                    </td>
                                    <td>
                                        <h5>Andrew Peach Birthday Surprise!</h5>
                                        <span>13:00 pm - 16:00 pm</span>
                                    </td>
                                    <td></td>
                                    <td>
                                        <h5>Danyl Johnson and Natasha Watts</h5>
                                        <span>13:00 pm - 16:00 pm</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Weekly Sehedule Area End -->
   



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


<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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

    <script src="poca/js/jquery.min.js"></script>
  <!-- Popper js -->
  <script src="poca/js/popper.min.js"></script>
  <!-- Bootstrap js -->
  <script src="poca/js/bootstrap.min.js"></script>
  <!-- All js -->
  <script src="poca/js/poca.bundle.js"></script>
  <!-- Active js -->
  <script src="poca/js/default-assets/active.js"></script>

</body>

</html>
