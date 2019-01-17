<?php 
session_start();
$stjrntecken = $_SESSION['saved'];
$datastring = file_get_contents('database.json');
$horoscopeData = json_decode($datastring);

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    echo  "<br> <br>". $stjrntecken. "<br>";
    foreach ($horoscopeData as $key => $value) {
        if($stjrntecken == $key) {
            echo $value->Horoskope;
        }    
    }
} 
            
?>