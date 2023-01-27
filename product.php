<?php

    abstract class product {
        protected $strCapacity;
        protected $strColor;
        public function __construct(string $color, string $capacity)
        {
            $this->strCapacity = $capacity;
            $this->strColor = $color;
        }
        
        abstract function data();
        abstract function takePicture();
    } 





?>