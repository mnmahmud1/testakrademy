<?php
    function validateColor($hex){
        $pecah = str_split($hex); //memecah kode hex
        $hit = count($pecah); //menghitung hasil pecah
        $pagar = array();
        $kode = array();
        $i = 0; //mendefinisikan var $i untuk looping
        while ($i < $hit) { 
            if ($pecah[$i] == '#'){
                $pecah[$i] = $pagar[$i];
            } else {
                $pecah[$i-1] = $kode[$i -1];
            }
            $i++;
        }

        $hitpagar = count($pagar);
        $hitkode = count($kode);
        $j = 0; //mendefinisikan var $j untuk looping

        if (($hitpagar == 1)&&($hitkode == 3 || $hitkode ==6 )) {
            # code...
        } else {
            echo "Format Hex Code salah!";
        }

    }
?>