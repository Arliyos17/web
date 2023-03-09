<?php
  echo "<br> Perulangan FOR 1-100 print bilangan ganjil <br>";
  function media($bil_akhir=100){
    for($bil_awal=0; $bil_awal <= $bil_akhir; $bil_awal++){
        echo $bil_awal.cekbil($bil_awal), "<br>";
    }
}        

function cekbil($bilangan){
    if($bilangan % 2 == 1 ){
        $result= " Bilangan Ganjil";
    }
    else{
        $result= " Bilangan Genap";
    }
    return $result;      
}
media()
?>