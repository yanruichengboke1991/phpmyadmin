<?php 

    function couponCODE(){
            $aif_array=array("A","B","C","D","E","F","G","H","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
            return $aif_array[array_rand($aif_array)].rand(100,999).$aif_array[array_rand($aif_array)].rand(100,999).$aif_array[array_rand($aif_array)].rand(100,999);
        }


        echo couponCODE();