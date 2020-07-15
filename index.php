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
   <!-- Custom css -->
   <link rel="stylesheet" href="./assets/css/custom.css">
   <style>
     /* * {
       outline: 1px solid red;
     } */

    </style>
  </head>
  <body>

  <!-- ***Header Section *** -->
  <header class="banner-section darkmode-ignore">
    <div class="container-fluid text-center text-white">
      <div class="coming-soon-plaster">
        <p>Coming Soon</p>
      </div>
      <div class="container">
        <div class="row">
        <div id="countdown" class="col-12"></div>
        </div>
      </div>
      

      <h2>Construction Buddy is Coming Soon!</h2>
      <p class="col-md-6 px-lg-5 mx-auto">Be the first to know when our site is up and running</p>
      <!-- form that submits to the email to the backend and database -->
      <form class="form-group mt-4 mx-auto" method="POST" action="submit.php">
        <div class="mx-auto d-flex justify-content-center">
          <input type="email"
            class="form-control mb-3 header-input rounded-0" name="email" id="email" placeholder="Enter a valid email address">
          <input class="submit p-2 header-button" name="submit" type="submit" value="Notify Me">
        </div>
      </form>
      <?php
        if(isset($_SESSION["error"])){
            $error = $_SESSION["error"];
            echo "<p class='text-center mt-1 text-danger p-3 text-white col-md-8 mx-auto'>$error</p>";
        }
      ?>  
    </div>
  </header>


  <main class="main-section">
    <div class="container-fluid">
      <!-- Our Story section -->
      <div class="story-section">
        <h2 class="text-center story-header stupid">Our Story</h2>
        <p class="text-center col-lg-8 mx-auto">Construction buddy helps engineers, realtors and individuals carry out evaluation of building materials. 
          Our evaluations are powered by a combination of the experience of several expert engineers and quantity surveyors
          and our powerful artifial intelligence technology.
          This solution is out to curb the hassle that comes with evaluation and is a promising measure to save cost of operation
        </p>
        <div class="row mx-md-5 px-md-5 story-bullets">
          <div class="col-md-4">
            <div class="d-flex align-items-end story-icon-wrapper">
              <ion-icon src="./assets/images/easy.svg" class="mr-5 story-icon"></ion-icon>
              <h4>Easy to use</h4>
            </div>
            <p>Break myths and impossibilities with our easy to use user interface</p>
          </div>
          <div class="col-md-4">
            <div class="d-flex align-items-end story-icon-wrapper">
              <ion-icon src="./assets/images/easy.svg" class="mr-5 story-icon"></ion-icon>
              <h4>Realistic Values</h4>
            </div>
            <p>Our BOQ are all evaluated by reputable engineers and quantitu surveyors</p>
          </div>
          <div class="col-md-4">
            <div class="d-flex align-items-end story-icon-wrapper">
              <ion-icon src="./assets/images/portable.svg" class="mr-5 story-icon"></ion-icon>
              <h4>Portable Results</h4>
            </div>
            <p>Get available data in real time and on the go</p>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid px-0">
      <h2 class="text-center col-lg-6 col-md-9 mx-auto breakdown-heading">Here's a quick breakdown of how it works</h2>
      <!-- First image container -->
      <div class="step-1-container">
        <div class="first-underlay"></div>
        <div class="row text-white pl-lg-5">
          <div class="col-lg-5 first-text-container pl-lg-5 pr-lg-4">
            <ion-icon src="./assets/images/icon.svg" class="icon-one pl-lg-5"></ion-icon>
            <h3 class="pl-lg-5">Clearly defined prompts</h3>
            <p class="pl-lg-5">
              All you need to do is provide information about the property you want to build and leave the 
              rest to our artificial intelligence powered algoritm.
              Our clearly defined prompts, help make this step easier
            </p>
          </div>
          <div class="col-lg-7 first-image-container">
            <img class="img-responsive step2-img text-center" src="./assets/images/step1.svg" alt="preview image of the website">
            <ion-icon src="./assets/images/icon2.svg" class="icon-2 ml-lg-5 pl-lg-5"></ion-icon>
          </div>
        </div>
      </div>
    </div>
      
    <div class="container-fluid">

      <!-- second image container  -->
      <div class="row step-2-container pr-lg-5 mx-n2">
        <div class="col-lg-7 first-image-container">
          <img class="img-responsive step2-img text-center" src="./assets/images/step2.svg" alt="preview image of the website">
        </div>
        <div class="col-lg-5 first-text-container">
          <ion-icon src="./assets/images/icon 3.svg" class="icon-one pr-lg-5"></ion-icon>
          <h3 class="pr-lg-5">Well detailed summary</h3>
          <p class="pr-lg-5 mr-lg-5">
          Afterwards, a well detailed summary of all materials needed is generated to suit the information you provided
          </p>
        </div>
      </div>

      <!-- Third image container -->
      <div class="row step-3-container pl-lg-5">
        <div class="col-lg-5 first-text-container pl-lg-5 pr-lg-4">
          <ion-icon src="./assets/images/icon 4.svg" class="icon-one pl-lg-5"></ion-icon>
          <h3 class="pl-lg-5">Available for you in real time</h3>
          <p class="pl-lg-5">
            The summary provided can be downloaded as a CSV file or printed directly from the system. 
            All downloads are encrypted and must comply with our terms and conditions
          </p>
        </div>
        <div class="col-lg-7 first-image-container">
          <img class="img-responsive step2-img text-center" src="./assets/images/step3.svg" alt="preview image of the website">
        </div>
      </div>
    </div>

    <div class="container-fluid px-0">
      <!-- dashboard-image-container -->
      <div class="dashboard-container text-center">
        <ion-icon src="./assets/images/icon2.svg" class="icon-dash"></ion-icon>
        <h3 class="stupid">Well detailed dashboard</h3>
        <div class="dash-image-wrapper text-center">
          <div class="second-underlay"></div>
          <img src="./assets/images/dashboard.svg" alt="preview of the site dashboard page" class="dashboard-img">
        </div>
      </div>
    </div>
    <div class="preview-section">
      <div class="container-fluid">
        <h2 class="text-center stupid">Pages preview</h2>
        <div class="row justify-content-around preview-top popup-gallery magnify">
          <a href="./assets/images/dummy_368x368_ffffff_cccccc.png" title="Landing Page">
            <img src="./assets/images/dummy_368x368_ffffff_cccccc.png" alt="preview of website">
          </a>
          <a href="./assets/images/dummy_368x368_ffffff_cccccc.png" title="Home Page">
            <img src="./assets/images/dummy_368x368_ffffff_cccccc.png" alt="preview of website">
          </a>
          <a href="./assets/images/dummy_368x368_ffffff_cccccc.png" title="Dashboard Page">
            <img src="./assets/images/dummy_368x368_ffffff_cccccc.png" alt="preview of website">
          </a>
        </div>
        <div class="row justify-content-around popup-gallery magnify" title="Dashboard Page">
          <a href="./assets/images/dummy_368x368_ffffff_cccccc.png">
            <img src="./assets/images/dummy_368x368_ffffff_cccccc.png" alt="preview of website">
          </a>
          <a href="./assets/images/dummy_368x368_ffffff_cccccc.png" title="Dashboard Page">
            <img src="./assets/images/dummy_368x368_ffffff_cccccc.png" alt="preview of website">
          </a>
          <a href="./assets/images/dummy_368x368_ffffff_cccccc.png" title="Dashboard Page">
            <img src="./assets/images/dummy_368x368_ffffff_cccccc.png" alt="preview of website">
          </a>
        </div>
      </div>
    </div>
  </main>
  <footer class="text-center">
    <h3>Be the first to know when we launch</h3>
    <p>Subscribe to our newsletter to stay informed</p>
    <form class="form-group mt-4 mx-auto mb-0" method="POST" action="submit.php">
        <div class="mx-auto d-flex justify-content-center">
          <input type="email"
            class="form-control mb-3 header-input rounded-0" name="email" id="email" placeholder="Enter a valid email address">
          <input class="submit p-2 header-button" name="submit" type="submit" value="Notify Me">
        </div>
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
    <!-- custom css -->
    <script src="./assets/js/custom.js"></script>
  </body>
</html>







<?php
    if(isset($_SESSION["error"])){
      unset($_SESSION["error"]);
      
    }
?>  