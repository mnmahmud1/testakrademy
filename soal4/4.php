<?php
    function validateColor($hex){
        $pecah = str_split($hex); //memecah kode hex
        $hit = count($pecah); //menghitung hasil pecah
        $pagar = array();
        $kode = array();
        for ($i = 0; $i < $hit ; $i++) { 
            if ($pecah[$i] == "#"){
                $pagar[$i] = $pecah[$i];
            } else {
                $kode[$i - 1] = $pecah[$i];
            }
        }
        
        $hitpagar = count($pagar);
        $hitkode = count($kode);
        $betul = array();
        $hasil = null;
        if (($hitpagar == 1)&&($hitkode == 3 || $hitkode == 6 )) {
            for ($j=0; $j < $hitkode ; $j++) {  
                    if ($kode[$j] == 1) {
                        $hasil = 1;
                    } elseif($kode[$j] == 2) {
                        $hasil = 1;
                    } elseif($kode[$j] == 3) {
                        $hasil = 1;
                    } elseif($kode[$j] == 4) {
                        $hasil = 1;
                    } elseif($kode[$j] == 5) {
                        $hasil = 1;
                    } elseif($kode[$j] == 6) {
                        $hasil = 1;
                    } elseif($kode[$j] == 7) {
                        $hasil = 1;
                    } elseif($kode[$j] == 8) {
                        $hasil = 1;
                    } elseif($kode[$j] == 9) {
                        $hasil = 1;
                    } elseif($kode[$j] == "a") {
                        $hasil = 1;
                    } elseif($kode[$j] == "b") {
                        $hasil = 1;
                    } elseif($kode[$j] == "c") {
                        $hasil = 1;
                    } elseif($kode[$j] == "d") {
                        $hasil = 1;
                    } elseif($kode[$j] == "e") {
                        $hasil = 1;
                    } elseif($kode[$j] == "f") {
                        $hasil = 1;
                    } elseif($kode[$j] == "A") {
                        $hasil = 1;
                    } elseif($kode[$j] == "B") {
                        $hasil = 1;
                    } elseif($kode[$j] == "C") {
                        $hasil = 1;
                    } elseif($kode[$j] == "D") {
                        $hasil = 1;
                    } elseif($kode[$j] == "E") {
                        $hasil = 1;
                    } elseif($kode[$j] == "F") {
                        $hasil = 1;
                    } else {
                        $hasil = 0;
                    }
                $betul[$j] = $hasil;
            }
        } else {
            echo "Format Hex Code salah!";
            exit;
        }

        $hitung = null;
        $hitbetul = count($betul);
        for ($l=0; $l < $hitbetul ; $l++) { 
            if ($betul[$l] == 1) {
                $hitung += 1;
            } else {
                echo "Format Hex Code salah!";
                exit;
            }
        }
        if ($hitung == 3 || $hitung == 6) {
            echo "Format Hex Code benar!";
        } else {
            echo "Format Hex Code salah!";
        }
    }
    validateColor("#eee");
    echo "<br>";
    validateColor("#F3F3F3");
    echo "<br>";
    validateColor("#ezff8d");
?>