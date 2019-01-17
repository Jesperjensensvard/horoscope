<?php
session_start();
include 'horoScopeVars.php';
$perNR = $_POST['PersonNummer'];
$str = $perNR;
$numberValue = strlen($str);
$Month = substr($perNR,2,2);
$Days = substr($perNR,4,2);

$yearMonth = range(0,12);
$yearDays = range(0,31);
$var = "";

for( $x = 0; $x < count($yearDays); $x++) {

    for($y = 0; $y < count($yearMonth); $y++) {
        
        if($Days == $yearDays[$x] && $Month == $yearMonth[$y]) {

            if($yearDays[$x] > 31 && $yearMonth[$y] > 12  && $numberValue != 10|| $yearDays[$x] < 31 && $yearMonth[$y] < 12 && $numberValue != 10  ) {
                echo "false";
            }

           elseif($yearDays[$x] > 18 && $yearMonth[$y] == 1 || $yearDays[$x] < 19 && $yearMonth[$y] == 2 ){
               $var = $vattumanen;
           }

           elseif($yearDays[$x] > 18 && $yearMonth[$y] == 2 || $yearDays[$x] < 21 && $yearMonth[$y] == 3 ) {
               $var = $fiskarna;
           }
           
           elseif($yearDays[$x] > 19 && $yearMonth[$y] == 3 || $yearDays[$x] < 21 && $yearMonth[$y] == 4 ) {
               $var = $Áries;
           }
           
           elseif($yearDays[$x] > 19 && $yearMonth[$y] == 4 || $yearDays[$x] < 21 && $yearMonth[$y] == 5 ) {
               $var = $oxen;
           }
           
           elseif($yearDays[$x] > 20 && $yearMonth[$y] == 5 || $yearDays[$x] < 21 && $yearMonth[$y] == 6  ) {
               $var = $twins;
              
           }
           
           elseif($yearDays[$x] > 21 && $yearMonth[$y] == 6 || $yearDays[$x] < 23 && $yearMonth[$y] == 7  ) {
               $var = $prawn;
           }
           
           elseif($yearDays[$x] > 22 && $yearMonth[$y] == 7 || $yearDays[$x] < 24 && $yearMonth[$y] == 8  ) {
               $var = $lion;
           }
           
           elseif($yearDays[$x] > 23 && $yearMonth[$y] == 8 || $yearDays[$x] < 23 && $yearMonth[$y] == 9  ) {
               $var = $maid;
           }

           elseif($yearDays[$x] > 22 && $yearMonth[$y] == 9 || $yearDays[$x] < 24 && $yearMonth[$y] == 10  ) {
               $var = $wave;
           }

           elseif($yearDays[$x] > 23 && $yearMonth[$y] == 10 || $yearDays[$x] < 23 && $yearMonth[$y] == 11  ) {
               $var = $scorpion;
           }

           elseif($yearDays[$x] > 22 && $yearMonth[$y] == 11 || $yearDays[$x] < 22 && $yearMonth[$y] == 12  ) {
               $var = $skytten;
           }

           elseif($yearDays[$x] > 21 && $yearMonth[$y] == 12 || $yearDays[$x] < 21 && $yearMonth[$y] == 1 ) {
               $var = $stenbocken;
           }
             
        }
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_SESSION['saved'] == null) {
            if($var != "") {
                $makeArray = $var;
                $_SESSION['saved']= $makeArray;
                echo "true";
            } elseif($_SESSION['saved'] != null) {
                echo "false";
        }
    }

}
x




?>
