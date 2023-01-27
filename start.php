<?php
    require_once("movilOn.php");

        class start implements movilOn{
            public function light(string $light){
                if($light == "yes"){
                    echo "The phone is on because the light comes on when i touch it";
                } else if ($light == "no"){
                    echo "The phone is not on because the light not comes on when i touch it";
                }
            }
            public function sound(string $sound){
                if($sound == "yes"){
                    echo "The phone is on because i can listen it when someone call me";
                } else if ($sound == "no"){
                    echo "The phone is on because i can´t listen it when someone call me";;
                }
            } 
            
        }



    // require_once("calculator.php");

    // class operations implements calculator{
    //     public function multipplication(int $num1, int $num2){
    //         $total = $num1 * $num2;
    //         return $total;
    //     }
    //     public function sum(int $num1, int $num2){
    //         $total = $num1 + $num2;
    //         return $total;
    //     } 
    //     public function rest(int $num1, int $num2){
    //         $total = $num1 - $num2;
    //         return $total;
    //     }
    //     public function division(int $num1, int $num2){
    //         $total = $num1 / $num2;
    //         return $total;
    //     }
    // }


?>