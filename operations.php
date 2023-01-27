<?php
    require_once("calculator.php");

    class operations implements calculator{
        public function multipplication(int $num1, int $num2){
            $total = $num1 * $num2;
            return $total;
        }
        public function sum(int $num1, int $num2){
            $total = $num1 + $num2;
            return $total;
        } 
        public function rest(int $num1, int $num2){
            $total = $num1 - $num2;
            return $total;
        }
        public function division(int $num1, int $num2){
            $total = $num1 / $num2;
            return $total;
        }
    }


?>