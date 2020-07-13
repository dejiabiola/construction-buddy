<?php

$status;

//defining the database configuration here

$db_host = 'localhost';
$db_name = 'form';
$db_user = "root";
$db_password = "";
$db_tablename = "cb_mailing_list";

if (isset($_POST['email'])) {    
  //check if Post_email is set
  $email =  $_POST['email'];

  // cleans the email inputed
  $clean_email = filter_var($email, FILTER_SANITIZE_EMAIL); 

  // validates the cleaned email using filter_validate_email
  if (filter_var($clean_email, FILTER_VALIDATE_EMAIL)) {  
    // create connection to database
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // testng connection
    if(!$conn) {
      die("Connection failed");
    }

    //query to insert to the db
    $query = "INSERT INTO $db_tablename (EMAIL) VALUES ('$email')"; 

    if(mysqli_query($conn, $query)) {
      $status = "<p class='bg-success text-white p-2 mx-auto col-md-8'>Email has been registered </p>";
    } else {
      if(preg_match("/Duplicate/i", mysqli_error($conn))){
        $status = "<p class='bg-danger text-white text-center p-2 mx-auto col-md-8'>Email already exists in the db 😏</p>";
      } else {
        $status = "<p class='bg-danger text-white text-center p-2 mx-auto col-md-8'>Something went wrong </p>";
      }      
    }
    $conn->close();
  } else {
    $status = "<p class='bg-danger text-white text-center p-2 mx-auto col-md-8'>Invalid Email</p>";
  }
}
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
  </head>
  <body>

  <h1 class="mt-5">Mailing List Submission</h1>

    <form action="index.php" method="POST">
      <input type="email" name="email" id="email" placeholder="Email username" >
      <button type="submit">Submit</button>
      <?php
        if (isset($_POST['email'])) {
          echo $status;
        }
      ?> 
    </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

