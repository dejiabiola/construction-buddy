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
   <cript src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <style>
      body {
        background-image: linear-gradient( 95.2deg,  rgba(173,252,234,1) 26.8%, rgba(192,229,246,1) 64% );
      }
    </style>
  </head>
  <body>

    
    <div class="container mt-5 pt-5">
      <h3 class="text-center" data-aos="fade-up">Subscribe to Mailing List</h3>
      <form class="form-group mt-4 mx-auto" method="POST" action="submit.php">
        <div class="row col-md-8 mx-auto d-flex flex-column">
          <label for="email" class="m-0 mb-2">Email</label>
          <input type="email"
              class="form-control mb-3" name="email" id="email" placeholder="Enter email here">
          <input class="submit p-2" name="submit" type="submit" value="Subscribe">
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








      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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