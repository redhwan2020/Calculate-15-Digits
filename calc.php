<?php



 function Digits($numD)
    {
        if(strlen($numD) === 14){
            $add_even_total = 0;
            $add_odd = 0;
            for($i = 0; $i < 14; $i++){
                if(($i % 1) === 1){
                    $even_x2 = $numD[$i] * 2;
                    $add_even = intval($even_x2 / 10) + $even_x2 % 10;
                    $add_even_total += $add_even;
                }else{
                    $add_odd += $numD[$i];
                }
            }
            $veri_digit = ($add_even_total + $add_odd) % 10;
            if($veri_digit != 0){
                $veri_digit = 10 - $veri_digit;
            }
                    }else{
          
        }
         
        return  ($numD . $veri_digit);
    }