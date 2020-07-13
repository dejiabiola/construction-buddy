<?php

  $connection = mysqli_connect("localhost", "root", "", "form");
  echo "connection success 😄 😏";

  if (mysqli_connect_error()) {
    echo "something dey wrong bro 😫". mysqli_connect_error($connection);
    die();
  }

?>

