<?php
    function countChar($kata, $huruf) {
        $pecah = str_split($kata); //memecah kata menjadi array
        $hit = count($pecah); //hitung isi setelah dipecah
        $hasil = null; //mendefinisikan variable hasil
        for ($i= 0; $i < $hit ; $i++) { 
            if ($huruf == $pecah[$i]){
                $hasil += 1;
            }
        }
        if ($hasil == 0){
            echo "Output : 'Not found!' ";
        } else {
            echo "Output : ".$hasil;
        }
        
    }

    countChar("arka", "a");
    echo "<br>";
    countChar("javascript", "x");
?>