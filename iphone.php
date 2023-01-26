<?php
    
    require_once("phones.php");

    class Iphone extends Phones{
        public $intResolution;
        public $intSize;
        static $strStatus = "Available";

        public function __construct(string $type, string $color, string $capacity, int $size, int $resolution){
            parent::__construct($type, $color, $capacity);
            
            $this->intSize = $size;
            $this->intResolution = $resolution;
    
        }

        public function write(){
            echo "The phone is writing";
        }
 

        public function data(){
            $strData = "<h4>Here you can find the Samnsung properties:</h4><hr>
            Type: {$this->strType},<br>
            Color: {$this->strColor}<br>
            Capacity: {$this->intCapacity}gb,<br>
            Size: {$this->intSize} cm,<br>
            Resolution: {$this->intResolution}px";

            return $strData;

        }

    }



?>