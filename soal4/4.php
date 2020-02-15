<?php
    function validateColor($hex){
        $pecah = str_split($hex); //memecah kode hex
        $hit = count($pecah); //menghitung hasil pecah
        $pagar = array();
        $kode = array();
        for ($i = 0; $i < $hit ; $i++) { 
            if ($pecah[$i] == '#'){
                $pagar[$i] = $pecah[$i];
            } else {
                $kode[$i -1] = $pecah[$i-1];
            }
        }
        $hexcode = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f", "A", "B", "C", "D", "E", "F");
        $hitpagar = count($pagar);
        $hitkode = count($kode);
        $hithexcode = count($hexcode);
        $betul = array();
        $hasil = null;
        if (($hitpagar == 1)&&($hitkode == 3 || $hitkode == 6 )) {
            for ($j=0; $j < $hitkode ; $j++) { 
                for ($k=0; $k < $hithexcode ; $k++) { 
                    if ($kode[$j] == $hexcode[$k]) {
                        $hasil = 1;
                    } else {
                        $hasil = 0;
                    }
                }
                $betul[$j] = $hasil;
            }
        } else {
            echo "Format Hex Code salah!";
            end;
        }
        $hitung = null;
        $hitbetul = count($betul);
        for ($l=0; $l < $hitbetul ; $l++) { 
            if ($betul[$l] == 1) {
                $hitung += 1;
            } else {
                echo "Format Hex Code salah!";
                end;
            }
        }
        if ($hitung == 3 || $hitung == 6) {
            echo "Format Hex Code benar!";
        } else {
            echo "Format Hex Code salah!";
        }
    }
    validateColor("#eee");
?>