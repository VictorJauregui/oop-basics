<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles1.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<div class="card">
    <div class="logo">
        <img class="img-logo" src="assets/img/media-markt.png"> 
    </div>
<?php
    require_once("iphone.php");
    require_once("start.php");

    $phone = new Phones("Smartphone","Blue", 256);
    echo $phone->data();
    echo "Status: " .iphone::$strStatus."<br>";

    $newSamnsung = new Iphone("Smartphone","Blue",256, 15, 1080); 
    
    echo $newSamnsung->data() ."<br>";
    echo "Status: " .iphone::$strStatus."<br>";

    $phoneStart = new start();
    echo $phoneStart->light("yes");

;
 
?>
<div class="phone">
    <img class="samsung" src="assets/img/phone.png"> 
</div>

</div>

</body>
</html>