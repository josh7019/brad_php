<?php
    $d1=$d2=$d3=$d4=$d5=$d0=0;
    for($i=0;$i<100;$i++){
        switch(rand(0,5)){
            case 0:$d0++;break;
            case 1:$d1++;break;
            case 2:$d2++;break;
            case 3:$d3++;break;
            case 4:$d4++;break;
            case 5:$d5++;break;
        }
    }
    
    echo "1點出現$d1<br>2點出現$d2<br>3點出現$d3<br>4點出現$d4<br>5點出現$d5<br>6點出現$d0<br>";



    $d=[1=>0,0,0,0,0,0];
    for($i=0;$i<100;$i++){
        $d[rand(1,6)]++;
    }

    foreach($d as $key=>$value){
        echo "{$key}點出現{$value}<br>";
    }
?>