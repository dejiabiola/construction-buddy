<?php 
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Construction Buddy | AI powered construction material estimating tool</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <!-- Animate on scroll -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <!-- Magnific Popup -->
   <link rel="stylesheet" href="./assets/css/magnific-popup/magnific-popup.min.css">
   <!-- Animate.css -->
   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
  <link rel="stylesheet" href="./assets/css/slick/slick.css">
  <link rel="stylesheet" href="./assets/css/slick/slick-theme.css">
   <!-- Custom css -->
   <link rel="stylesheet" href="./assets/css/custom.css">
   <style>
     /* * {
       outline: 1px solid red;
     } */

    </style>
  </head>
  <body>

   <!-- *** Preloader Starts *** -->
   <!-- <div id="preloader">
      <div id="status">&nbsp;</div>
    </div> -->
    <!-- Preloader End -->

  <!-- ***Header Section *** -->
  <header class="banner-section darkmode-ignore">
    <div class="container-fluid text-center text-white">
      <div class="coming-soon-plaster">
        <p>Coming Soon</p>
      </div>
      <div class="container">
        <div class="row">
        <div id="countdown" class="col-12 anim-hero" data-aos="flip-up"></div>
        </div>
      </div>
      

      <h2 class="anim-hero" data-aos="flip-up" data-aos-delay="200">Material cost estimate for any building at the tip of your finger</h2>
      <p class="col-md-9 col-lg-6 px-lg-5 mx-auto anim-hero" data-aos="flip-up" data-aos-delay="400">Be the first to know when our product is up and running</p>
      <!-- form that submits to the email to the backend and database -->
      
      <form class="form-group mt-4 mx-auto anim-hero" method="POST" action="submit.php">
        <div data-aos="zoom-in" data-aos-delay="400" class="mx-auto d-flex flex-column flex-md-row justify-content-center align-items-center text-center align-items-md-start">
          <input type="email"
            
            class="form-control mb-2 header-input rounded-0 text-center text-md-left input-top" 
            name="email" id="email" placeholder="Enter a valid email address"
            <?php 
              if(isset($_SESSION["email"])){
                $email = $_SESSION["email"];
                echo "value=" . $email;
              }
            ?>
            >
          <button class="submit p-2 header-button" name="submit" type="submit" value="Notify Me" onclick="return val()">
            Notify Me
            <img src="./assets/images/next.svg" alt="" class="d-none d-lg-block">
          </button>
        </div>
        <div class="j-error"></div>
        <?php
        if(isset($_SESSION["error"])){
            $error = $_SESSION["error"];
            echo "<div class='text-center alert alert-danger p-1 col-md-5 mx-auto mt-2 mt-md-0' role='alert'>$error</div>";
        }
      ?>  
      </form>
    </div>
  </header>


  <main class="main-section">
    <div class="container-fluid">
      <!-- Our Story section -->
      <div class="story-section">
        <h2 class="text-center story-header" data-aos="fade-in">Our Story</h2>
        <p class="text-center col-lg-8 px-0 mx-auto" data-aos="zoom-in-up">Construction buddy helps engineers, realtors and individuals carry out evaluation of building materials. 
          Our evaluations are powered by a combination of the experience of several expert engineers and quantity surveyors
          and our powerful artifial intelligence technology.
        </p>
        <div class="row mx-md-5 px-md-5 story-bullets">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="zoom-in-up">
            <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-end story-icon-wrapper">
              <svg class="mb-4 mb-lg-0 mr-lg-5 story-icon" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect y="23" width="31" height="31" fill="#141415" class="change-fill"/>
                <circle cx="42.5" cy="11.5" r="11.5" fill="#E67109"/>
              </svg>

              <h4>Easy to Use</h4>
            </div>
            <p class="text-center text-lg-left px-2 px-md-0">Break myths and impossibilities with our easy to use user interface</p>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0 mt-5 mt-lg-0" data-aos="zoom-in-up">
            <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-end story-icon-wrapper">
              <svg class="mb-4 mb-lg-0 mr-lg-5 story-icon" width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="15.8262" y="6.32666" width="31" height="31" transform="rotate(30 15.8262 6.32666)" fill="#141415" class="change-fill"/>
                <circle cx="36.5" cy="11.5" r="11.5" fill="#E67109"/>
                <circle cx="13.5" cy="34.5" r="11.5" fill="#E67109"/>
              </svg>

              <h4>Realistic Values</h4>
            </div>
            <p class="text-center text-lg-left px-2 px-md-0">Our BOQ are all evaluated by reputable engineers and quantity surveyors</p>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0 mt-5 mt-lg-0" data-aos="zoom-in-up">
            <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-end story-icon-wrapper">
              <svg class="mb-4 mb-lg-0 mr-lg-5 story-icon" width="54" height="54" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="31" height="31" fill="#141415" class="change-fill"/>
                <circle cx="24" cy="24" r="10" fill="#E67109"/>
              </svg>

              <h4>Portable Results</h4>
            </div>
            <p class="text-center text-lg-left px-2 px-md-0">Get available data in real time and on the go</p>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid px-0">
      <h2 class="text-center col-lg-6 col-md-9 mx-auto px-5 breakdown-heading" data-aos="zoom-in-up">
        Here's a Quick Breakdown of How it Works
      </h2>
      <!-- First image container -->
      <div class="step-1-container">
        <div class="first-underlay d-none d-md-block"></div>
        <div class="container-fluid">
          <div class="row text-white pl-lg-5">
            <div class="col-lg-5 first-text-container pl-lg-5 pr-lg-4 d-flex 
              d-lg-block flex-column align-items-center mb-5 mb-lg-0" data-aos="zoom-in-left">
              <ion-icon src="./assets/images/icon.svg" class="icon-one pl-lg-5"></ion-icon>
              <h3 class="pl-lg-5 text-center text-lg-left">Submit a Request</h3>
              <p class="pl-lg-5 text-center text-lg-left">
                All you need to do is provide information either by filling a form or through the integrated
                autoCAD canvas about the property you want to build and our 
                artificial intelligence powered technology calculates the material cost of the building.
              </p>
            </div>
            <div class="col-lg-7 first-image-container d-flex d-lg-block justify-content-center flex-column">
              <img class="img-responsive step2-img text-center" src="./assets/images/step1.svg" 
              alt="preview image of the website" data-aos="zoom-in-right" data-aos-delay="200">
              <ion-icon src="./assets/images/icon2.svg" class="icon-2 ml-lg-5 pl-lg-5"
               data-aos="fade-down" data-aos-delay="400" data-aos-offset="100"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <div class="container-fluid">

      <!-- second image container  -->
      <div class="row step-2-container pr-lg-5">
        <div class="col-lg-7 first-image-container order-2 order-lg-1 d-flex d-lg-block 
        justify-content-center flex-column" data-aos="zoom-in-left">
          <img class="img-responsive step2-img text-center" src="./assets/images/step2.svg" alt="preview image of the website">
        </div>
        <div class="col-lg-5 first-text-container order-1 order-lg-2 mb-5 mb-lg-0 d-flex d-lg-block flex-column align-items-center" data-aos="zoom-in-right">
          <ion-icon src="./assets/images/icon 3.svg" class="icon-one pr-lg-5"></ion-icon>
          <h3 class="pr-lg-5 text-center text-lg-left">View Bill of Quantities(BOQ)</h3>
          <p class="pr-lg-5 mr-lg-5 text-center text-lg-left">
          Afterwards, a Bill of quantities(BOQ) that provides specific measured quantities of the items provided by the user, 
          is generated.
          </p>
        </div>
      </div>

      <!-- Third image container -->
      <div class="row step-3-container pl-lg-5">
        <div class="col-lg-5 first-text-container pl-lg-5 pr-lg-4 d-flex d-lg-block flex-column align-items-center" data-aos="zoom-in-left">
          <ion-icon src="./assets/images/icon 4.svg" class="icon-one pl-lg-5"></ion-icon>
          <h3 class="pl-lg-5 text-center text-lg-left">Available for you in Real Time</h3>
          <p class="pl-lg-5 text-center text-lg-left mb-5 mb-lg-0">
          The BOQ provided can be downloaded as a CSV file or printed directly from the system. 
          All downloads are encrypted and must comply with our terms and conditions.
          </p>
        </div>
        <div class="col-lg-7 first-image-container d-flex d-lg-block justify-content-center flex-column" data-aos="zoom-in-right">
          <img class="img-responsive step2-img text-center" src="./assets/images/step3.svg" alt="preview image of the website">
        </div>
      </div>
    </div>
<!-- 
    <div class="container-fluid px-0">
      <div class="dashboard-container text-center">
        <ion-icon src="./assets/images/dash.svg" class="icon-dash" data-aos="fade-in"></ion-icon>
        <h3 class="" data-aos="zoom-in-up">Well Detailed Dashboard</h3>
        <div class="dash-image-wrapper text-center">
          <div class="second-underlay d-none d-lg-block"></div>
          <img src="./assets/images/dashboard-latest (1).svg" alt="preview of the site dashboard page" class="dashboard-img"
          data-aos="zoom-in-up">
        </div>
      </div>
    </div> -->

    <div class="preview-section">
      <div class="container-fluid">
        <h2 class="text-center" data-aos="zoom-in-up">Pages Preview</h2>
        <div class="row justify-content-around preview-top popup-gallery magnify px-3 responsive">
          <a href="./assets/images/Landing PAGE.svg" class="mb-5 mx-2 mx-lg-0" title="Landing Page" data-aos="zoom-in-right">
            <div class="preview-overlay">
              <div>
              <ion-icon src="./assets/images/img-hover.svg" class="img-hover"></ion-icon>
              <p class="text-center">Landing</p>
              </div>
            </div>
            <img src="./assets/images/Hero-landing page.svg" alt="preview of website">
          </a>
          <a href="./assets/images/Home-CB.svg" class="mb-5 mx-2 mx-lg-0" title="Home Page" data-aos="zoom-in-up">
            <div class="preview-overlay">
              <div>
                <ion-icon src="./assets/images/img-hover.svg" class="img-hover"></ion-icon>
                <p class="text-center">Home</p>
              </div>
            </div>
            <img src="./assets/images/Hero Section.svg" alt="preview of website">
          </a>
          <a href="./assets/images/dash-preview.svg" title="Dashboard Page" class="mb-5 mx-2 mx-lg-0" data-aos="zoom-in-left">
            <div class="preview-overlay">
              <div>
                <ion-icon src="./assets/images/img-hover.svg" class="img-hover"></ion-icon>
                <p class="text-center">Dashboard</p>
              </div>
            </div>
            <img src="./assets/images/dash-preview.svg" alt="preview of website">
          </a>
          <a href="./assets/images/Canvas.svg" title="Canvas" class="mb-5 mx-2 mx-lg-0" data-aos="zoom-in-right">
            <div class="preview-overlay">
              <div>
                <ion-icon src="./assets/images/img-hover.svg" class="img-hover"></ion-icon>
                <p class="text-center">Canvas</p>
              </div>
            </div>
            <img src="./assets/images/Canvas.svg" alt="preview of website">
          </a>
          <a href="./assets/images/Evaluation request.svg" class="mb-5 mx-2 mx-lg-0" title="Form Page" data-aos="zoom-in-up">
            <div class="preview-overlay">
              <div>
                <ion-icon src="./assets/images/img-hover.svg" class="img-hover"></ion-icon>
                <p class="text-center">Form Page</p>
              </div>
            </div>
            <img src="./assets/images/Evaluation request.svg" alt="preview of website">
          </a>
          <a href="./assets/images/Evaluation request-2.svg" title="Result Page" data-aos="zoom-in-left">
            <div class="preview-overlay">
              <div>
                <ion-icon src="./assets/images/img-hover.svg" class="img-hover"></ion-icon>
                <p class="text-center">Result Page</p>
              </div>
            </div>
            <img src="./assets/images/Evaluation request-2.svg" alt="preview of website">
          </a>
        </div>
      </div>
    </div>
  </main>
  <footer class="text-center">
    <h3 data-aos="zoom-in-up">Be the first to know when we launch</h3>
    <p data-aos="zoom-in-up">Subscribe to our newsletter to stay informed</p>
    <form class="form-group mt-4 mx-auto" method="POST" action="submit.php" data-aos="zoom-in-up">
        <div class="mx-auto d-flex flex-column flex-md-row justify-content-center align-items-center text-center align-items-md-start">
          <input type="email"
            class="form-control mb-2 header-input rounded-0 text-center text-md-left" name="email" id="email" placeholder="Enter a valid email address">
          <button class="submit p-2 header-button" name="submit" type="submit" value="Notify Me">
            Notify Me
            <img src="./assets/images/next.svg" alt="" class="d-none d-lg-block">
          </button>
        </div>
        <?php
        if(isset($_SESSION["error"])){
          $error = $_SESSION["error"];
          echo "<div class='text-center alert alert-danger p-1 col-md-5 mx-auto mt-2 mt-md-0' role='alert'>$error</div>";
        }
      ?>  
      </form>
  </footer>








      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <!-- animate on scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- countdown clock -->
    <script src="./assets/js/countdown-clock/countdown.jquery.js"></script>
    <!-- ionicons -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <!-- magnific pop-up -->
    <script src="./assets/js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- DArkMode.js -->
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.6/lib/darkmode-js.min.js"></script>
    <script src="./assets/js/slick/slick.min.js"></script>
    <!-- custom css -->
    <script src="./assets/js/custom.js"></script>
  </body>
</html>







<?php
    if(isset($_SESSION["error"])){
      unset($_SESSION["error"]);
      
    }

    if(isset($_SESSION["email"])){
      unset($_SESSION["email"]);
      
    }
?>  

