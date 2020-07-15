<?php 
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="./assets/css/custom.css">
   <style>
     * {
       outline: 1px solid red;
     }

    </style>
  </head>
  <body>

  <!-- ***Header Section *** -->
  <header class="banner-section">
    <div class="container-fluid text-center text-white">
      <div class="coming-soon-plaster">
        <p>Coming Soon</p>
      </div>
      <div class="container">
        <div class="row">
        <div id="countdown" class="col-12"></div>
        </div>
      </div>
      

      <h2>Coming Soon!</h2>
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
            echo "<p class='text-center mt-1 bg-danger p-3 text-white col-md-8 mx-auto'>$error</p>";
        }
        if(isset($_SESSION["success"])){
            $success = $_SESSION["success"];
            echo "<p class='text-center mt-1 bg-success p-3 text-white col-md-8 mx-auto'>$success</p>";
        }
      ?>  
    </div>
  </header>


  <main class="main-section">
    <div class="container-fluid">
      <h2 class="text-center col-lg-6 col-md-9 mx-auto">Here's a quick breakdown of how it works</h2>
      <!-- First image container -->
      <div class="row step-1-container text-white pl-lg-5">
        <div class="first-underlay"></div>
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

      <!-- second image container  -->
      <div class="row step-2-container pr-lg-5">
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




    <!-- <div class="container-fluid step-3">
      <div class="d-flex flex-column flex-lg-row align-items-center
       justify-content-center justify-content-lg-around"> 
        <div class="text-center text-lg-left col-lg-5">
          <ion-icon src="./assets/images/icon 3.svg" class="icon-3"></ion-icon>
          <h3>Available for you in real time</h3>
          <p>
            The summary provided can be downloaded as a CSV file or printed directly from the system.
            All downloads are encrypted nd must comply with out terms and conditions.
          </p>
        </div>
        <div class="mx-auto text-center">
          <img class="img-responsive step2-img text-center" src="./assets/images/step3.svg" alt="preview image of the website">
        </div>
      </div>
    </div>
    <div class="first-image-container d-flex flex-column align-items-center">
      <img class="step2-img" src="./assets/images/step1.svg" alt="preview image of the website">
      <ion-icon src="./assets/images/icon2.svg" class="icon-2"></ion-icon>
    </div>
    <div class="container-fluid step-2">
      <div class="d-flex flex-column flex-lg-row align-items-center
       justify-content-center justify-content-lg-around">
       <div class="mx-auto text-center">
        <img class="img-responsive step2-img text-center" src="./assets/images/step2.svg" alt="preview image of the website">
       </div>
        <div class="mx-auto text-center text-lg-left">
          <ion-icon src="./assets/images/icon 3.svg" class="icon-3"></ion-icon>
          <h3>Well detailed summary</h3>
          <p>
            Afterwards, a well detailed summary of all materials needed is generated to suit the information
            you provided.
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid step-3">
      <div class="d-flex flex-column flex-lg-row align-items-center
       justify-content-center justify-content-lg-around"> 
        <div class="text-center text-lg-left col-lg-5">
          <div class="col-lg-8">
            <ion-icon src="./assets/images/icon 3.svg" class="icon-3"></ion-icon>
            <h3>Available for you in real time</h3>
            <p>
              The summary provided can be downloaded as a CSV file or printed directly from the system.
              All downloads are encrypted nd must comply with out terms and conditions.
            </p>
            </div>
        </div>
        <div class="mx-auto text-center">
          <img class="img-responsive step2-img text-center" src="./assets/images/step3.svg" alt="preview image of the website">
        </div>
      </div>
    </div> -->
  </main>
  <!-- <footer class="text-center">
    <h3>Be the first to know about us</h3>
    <p>Subscribe to our newsletter to stay informed</p>
    <form class="form-group mt-4 mx-auto" method="POST" action="submit.php">
        <div class="mx-auto d-flex justify-content-center">
          <input type="email"
            class="form-control mb-3 header-input rounded-0" name="email" id="email" placeholder="Enter a valid email address">
          <input class="submit p-2 header-button" name="submit" type="submit" value="Notify Me">
        </div>
      </form>
  </footer> -->








      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
    <!-- custom css -->
    <script src="./assets/js/custom.js"></script>
  </body>
</html>







<?php
    if(isset($_SESSION["error"])){
      unset($_SESSION["error"]);
      
    }

    if(isset($_SESSION["success"])){
      unset($_SESSION["success"]);
    }
?>  