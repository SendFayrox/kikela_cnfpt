<?php
$today = getdate();
if(isset($_GET['year'])){
    $year=$_GET['year'];
}else{
    $year=$today["year"];
}
$MONTHS_STRING = ["Janvier", "Février", "Mars", "Avril", 'Mai', "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"];
$DAYS_COUNT = ["31", "28", "31", "30", "31","30", "31", "31", "30", "31", "30", "31" ];
var_dump($today);
for($i=($today["mon"]-1); $i<count($MONTHS_STRING); $i++){
    echo $MONTHS_STRING[$i] . "<br>";
    for($f=1; $f<=$DAYS_COUNT[$i]; $f++){
        $week = date("W", strtotime(substr(date(DATE_ATOM, mktime(0, 0, 0, $i+1, $f, $year)), 0, 10)));
        echo $week;
        echo "<br>";
        // echo $week;
        if($today["mday"]==$f){
            echo "Today" . $f . "<br>";
        }else{
            echo $f . "<br>";
        }
        
    }

}


