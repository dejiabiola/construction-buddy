<?php 



function print_alert(){
  //for printing message or error;
  $types = ['message','info','error'];
  $colors = ['success','info','danger'];
    
  for($i = 0; $i < count($types); $i++){
      
    if( isset($_SESSION[$types[$i]]) && !empty($_SESSION[$types[$i]]) ) {
      echo "<div class='alert alert-".$colors[$i]."' role='alert' style='text-align: center;'>" . $_SESSION[$types[$i]] . "</div>";
      die();
      $_SESSION[$types[$i]] = '';
    }

  }

}


function set_alert($type = "message", $content = ""){
  switch($type){
      case "message":
          return $message=$content;
      break;
      case "error":
          $error = $content;
      break;
      case "info":
          $info = $content;
      break;
      default:
      $message = $content;
  break;
  }
}
?>