<?php
    require_once("product.php");

    class Phones extends product{
        public $strFinish = "We dont have more information about this product";

        public $strType;
        public $strColor;
        public $intCapacity;
        public $intNumber;


        public function __construct(string $smartProduct, string $type, string $color, string $capacity){
            parent::__construct($smartProduct);
            $this->strType = $type;
            $this->strColor = $color;
            $this->intCapacity = $capacity;
        }

        public function __destruct()
        {
            return $this->strFinish;
        }

        public function call(){
            $min = 600000000;
            $max = 699999999;
            $this->intNumber = rand($min,$max);
            return "You are calling  {$this->intNumber}";
        }

        public function TurnOff(string $yesNot){
            if($yesNot == "yes"){
                echo "The phone is turn off";
            } else if($yesNot == "no"){
                echo "The phone is turn on";
            } else{
                echo "Te phone is broken";
            }
        }

        public function x(){
            echo "The phone is doing a picture";
        }
    

        public function data(){
            $strData = "<h4>This are the product properties:</h4><hr>
            Smart Product: {$this->strSmartProduct},<br>
            Type: {$this->strType},<br>
            Color: {$this->strColor}<br>
            Capacity: {$this->intCapacity}gb<br>";

            return $strData;
        }

        


    }


?>