<?php
    require_once("iphone.php");

    $phone = new Phones("Phone","blue", 128);
    echo $phone->data();
    echo "Status: " .iphone::$strStatus."<br>";

    $newSamnsung = new Iphone("Samsung","Red", 256, 15, 1080); 
    
    echo $newSamnsung->data() ."<br>";
    echo "Status: " .iphone::$strStatus."<br>";

;
 



    


?>