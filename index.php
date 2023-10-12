<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PlayPal Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?php
    $contactFile = 'contacts.txt';

    if (file_exists($contactFile)) {
        $contactInfo = file($contactFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        // Initialize variables
        $location = "";
        $email = "";
        $phone = "";

        // Parse the contact information
        foreach ($contactInfo as $line) {
            $parts = explode(':', $line);
            if (count($parts) == 2) {
                $field = trim($parts[0]);
                $value = trim($parts[1]);

                switch ($field) {
                    case 'Location':
                        $location = $value;
                        break;
                    case 'Email':
                        $email = $value;
                        break;
                    case 'Phone':
                        $phone = $value;
                        break;
                }
            }
        }
    } else {
        echo "Contact file not found.";
    }
    ?>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt=""></a>
      <h1 data-aos="zoom-in">Welcome To PlayPal</h1>
      <h2 data-aos="fade-up">Uniting Athletes, One Game at a Time.</h2>
      <a data-aos="fade-up" data-aos-delay="200" href="#about" class="btn-get-started scrollto">Let's PLAYY</a>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Product</a></li>
          <!-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
          <li><a class="nav-link scrollto" href="#faq">News</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>About Us</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="image">
              <img src="assets/img/about2.jpg" class="img-fluid" alt="">
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
              <h3>We're passionate about sports.</h3>
              <p class="fst-italic">
                Our mission is to connect individuals with a shared love for sports, fostering friendships and promoting an active lifestyle. Founded in 2023, we've helped countless athletes meet new friends, teammates, and competitors.
              </p>
              <ul>
                <li><i class="bx bx-check-double"></i> Inclusive Community: We welcome athletes of all levels and backgrounds, uniting them through a shared passion for sports.</li>
                <li><i class="bx bx-check-double"></i> Driven by Connection: Our team is dedicated to fostering meaningful connections among sports enthusiasts. </li>
                <li><i class="bx bx-check-double"></i> Your Privacy Matters: Your safety and personal information are our top concerns, ensuring a secure and enjoyable experience on our platform.</li>
              </ul>
              <p>
                Join our growing community and discover the joy of playing sports together.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <!-- <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p> -->
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>Sports Matchmaking</h4>
              <p>Our advanced machine learning algorithm pairs you with the perfect sports partners, whether it's for a one-on-one match, team play, or a friendly game.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-cube-alt"></i>
              <h4>Event Coordination:</h4>
              <p>Organize and join sports events, tournaments, and leagues in your area or online.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-images"></i>
              <h4>Community Forums</h4>
              <p>Engage with other members, share your experiences, and stay updated on the latest sports happenings.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-shield"></i>
              <h4>Premium Memberships</h4>
              <p>Unlock exclusive features and benefits with our premium membership plans.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/services1.jpg");' data-aos="fade-left" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Section ======= -->
    <section id="featured" class="featured">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="assets/img/featured-1.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="assets/img/featured-2.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="assets/img/featured-3.png" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="assets/img/featured-4.png" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                  <h4>Google Maps Integration</h4>
                  <p>Finding your next sports adventure has never been simpler.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                  <h4>UTR System Integration</h4>
                  <p>Unleash your full tennis potential with our UTR integration.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                  <h4>Live Score and Stats Tracking</h4>
                  <p>Turn every game into a thriller with real-time scoring and stats tracking!</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">
                  <h4>Coaching Network</h4>
                  <p>Unlock Your Potential with Pro Coaching: Elevate Your Game, Your Way!</p>
                </a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section>
    <!-- End Featured Section -->

    <!-- End Clients Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Sports</h2>
          <p>We are continously expanding the number of sports we support!</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in">
              <div class="member-img">
                <img src="assets/img/team/tennis.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Tennis</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/soccer.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Soccer</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/basketball.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Basketball</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/pickleball.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Pickle Ball</h4>
              </div>
            </div>
          </div>
        
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/tabletennis.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Table Tennis</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/badminton1.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Badminton</h4>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    
    <!-- <--! End Pricing Section --> 

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>News</h2>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up">
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">Exclusive Deals & Offers<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Take advantage of our Exclusive Deals & Offers to maximize your sports meetup experience. Early birds can secure their spots in upcoming meetups and be among the first 50 to receive a complimentary group session. With our Refer & Rally program, you can introduce a friend to our platform, and both of you will unlock a free month of premium access, making your sports journey even more enjoyable. And if you're looking to take your fitness to the next level, our Seasonal Special offers a 20% discount on personalized coaching sessions when you join any group activity this season. It's our way of showing appreciation for your dedication to sports and fitness.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">Upcoming Events & Challenges<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Join the excitement with our upcoming events and challenges. Whether you're a seasoned athlete or a newcomer looking to get in the game, our group runs, marathons, and fitness challenges offer something for everyone. It's a fantastic opportunity to connect with like-minded sports enthusiasts, challenge yourself, and share unforgettable moments on the field. Plus, our charity sports events give you the chance to make a positive impact while doing what you love.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Member Showcases<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                In our Member Showcases, we celebrate the individuals who make our sports meetup community special. Each month, we shine a spotlight on an outstanding athlete. Our Trainer Talks introduce you to our team of dedicated trainers and coaches, such as Sophia Bennett, who not only excel in the sports realm but also share their expertise and enthusiasm for nutrition. And in our Success Stories section, you'll find tales of incredible sports journeys. Take, for instance, the story of tennis enthusiasts Sarah & John, who started as meetup members and progressed to achieving remarkable milestones, including tournament victories and ranking improvements. These stories highlight the power of our sports community to transform passions into tangible achievements.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>


        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <?php
                  if (!empty($email)) {
                    echo "<p><strong>Headquarters:</strong> $location</p>";
                  }
                ?>
                
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <?php
                  if (!empty($email)) {
                    echo "<p><strong>Contact us on:</strong> $email</p>";
                  }
                ?>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <?php
                  if (!empty($email)) {
                    echo "<p><strong>Call us on:</strong> $phone</p>";
                  }
                ?>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
  
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row justify-content-center">
          <div class="col-lg-6">
            <a href="#header" class="scrollto footer-logo"><img src="assets/img/hero-logo.png" alt=""></a>
            <h3>PlayPal</h3>
            <!-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> -->
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Join our Newsletter for all the latest updates"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>PlayPal</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>