<?php
    class Phones {
        public $strFinish = "We dont have more information about this product";

        public $strType;
        public $strColor;
        public $intCapacity;
        public $strStart;
        public $strtoPhotograph;
        public $strturnOff;

        public function __construct(string $type, string $color, string $capacity)
        {
            $this->strType = $type;
            $this->strColor = $color;
            $this->intCapacity = $capacity;
        }

        public function __destruct()
        {
            return $this->strFinish;
        }

        public function setStart(string $start){
            $this->strStart = $start;
        }

        public function getStart(){
            $strDatos = "<h4>The SmartPhone is {$this->strStart} and you can check its properties:</h4><hr>
            Type: {$this->strType},<br>
            Color: {$this->strColor}<br>
            Capacity: {$this->intCapacity}gb<br>";

            return $strDatos;
        }

        public function setToPhotograph(string $toPhotograph){
            $this->strtoPhotograph = $toPhotograph;
        }

        public function getToPhotograph():string{
            return "The SmartPhone is {$this->strtoPhotograph}";
        }

        public function setturnoff(string $turnoff){
            $this->strturnOff = $turnoff;
        }

        public function getturnoff():string{
            return "The SmartPhone is {$this->strturnOff}";
        }


    }


?>