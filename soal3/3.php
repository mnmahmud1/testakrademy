<?php
    function countChar($kata, $huruf) {
        $pecah = str_split($kata); //memecah kata menjadi array
        $hit = count($pecah); //hitung isi setelah dipecah
        for ($i=0; $i < $hit ; $i++) { 
            if ($huruf == $pecah[$i]){
                $hasil += 1;
            }
        }

    }

?>