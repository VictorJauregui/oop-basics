<?php

    abstract class product{
        public $strSmartProduct;
        
        public function __construct(string $smartProduct)
        {
            $this->strSmartProduct = $smartProduct;
        }
        
        abstract function data();
    } 





?>