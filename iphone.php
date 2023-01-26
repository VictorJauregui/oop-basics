<?php
    
    require_once("phones.php");

    class Iphone extends Phones{
        public $intResolution;
        public $intSize;
        public $intNumber;
        static $strStatus = "Available";

        public function __construct(string $type, string $color, string $capacity, int $size, int $resolution){
            parent::__construct($type, $color, $capacity);
            
            $this->intSize = $size;
            $this->intResolution = $resolution;
    
        }


        public function call(){
            $min = 600000000;
            $max = 699999999;
            $this->intNumber = rand($min,$max);
            return "You are calling  {$this->intNumber}";
        }

        public function getCall(){
            echo "<br><b>This Iphone has this properties:<hr><br></b>
            Size: {$this->intSize} cm,<br>
            Resolution: {$this->intResolution}px";

            
            
            
            // return $this->strCall;
            // return $this->intResolution;
        }

        
        // public function getStart(){
        //     $strDatos = "<h4>The SmartPhone is {$this->strStart} and you can check its properties:</h4><hr>
        //     <b>Type:</b> {$this->strType},<br>
        //     <b>Color:</b>  {$this->strColor}<br>
        //     <b>Capacity:</b>  {$this->intCapacity} gb<br><br>
            
        //     <b>Great! You choose this iphone. Here you can find its properties;</b><hr><br><br>
        //     <b>Iphone Type:</b>  {$this->strTypeIphone},<br>
        //     <b>Resolution:</b>  {$this->intResolution} px<br>
        //     <b>Its Available?:</b>  self::{$this->strStatus}<br>";

        //     return $strDatos;

        // }


    }



?>