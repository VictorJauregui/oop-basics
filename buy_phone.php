<?php
    require_once("iphone.php");

    $PhoneBuy = new Iphone("Iphone","Red", 256, 15, 1080);
    $PhoneBuy->setStart("start");
 

    
    echo $PhoneBuy->getStart();
    echo $PhoneBuy->getCall()."<br>";
    echo "Status: " .iphone::$strStatus."<br>";
    echo $PhoneBuy->call();


?>