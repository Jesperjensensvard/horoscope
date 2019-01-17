<?php
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
include 'countTheScope.php';

if($_SERVER['REQUEST_METHOD'] === 'PUT'){

    if($_SESSION['saved'] == null) {
        echo "false";
    }elseif ($_SESSION['saved'] != null) {
        $makeArray = $var;
        $_SESSION['saved']= $makeArray;
        echo "true";    
    }
}

   

      
?>