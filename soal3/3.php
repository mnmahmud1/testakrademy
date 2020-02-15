<?php
    function countChar($kata, $huruf) {
        $pecah = str_split($kata); //memecah kata menjadi array
        $hit = count($pecah); //hitung isi setelah dipecah
        $hasil = null; //mendefinisikan variable hasil
        for ($i=0; $i < $hit ; $i++) { 
            if ($huruf == $pecah[$i]){
                $hasil += 1;
            }
        }
        echo "Output = ".$hasil;
    }

    countChar("arka", "a")
?>