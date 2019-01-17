<?php 
 session_start();
 if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
     if(isset($_SESSION['saved'])){
         unset($_SESSION['saved']);
         echo "true";
         include 'super.php';
     }  else {
         echo "false";
     }
 }
 

?>