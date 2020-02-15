<?php
    function validateColor($hex){
        $pecah = str_split($hex); //memecah kode hex
        $hit = count($pecah); //menghitung hasil pecah
        $pagar = array();
        $kode = array();
        $i = 0;
        while ($i < $hit) { 
            if ($pecah[$i] == '#'){
                $pecah[$i] = $pagar[$i];
            } else {
                $pecah[$i-1] = $pagar[$i -1];
            }
            $i++;
        }

    }
?>