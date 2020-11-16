<?php
    $cek=0;
    for($i=1;$i<=50;$i++){
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
                $cek++;
            }
        }
        if($cek==2){
            echo "$i <br>";
        }
        $cek=0;
    }
?>