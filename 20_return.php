<?php
    $s=100;
    
    function fx($x){
        $s=200;
        return 2*$x+1;
    }
    echo fx(5).$s;


    function test(&$var1){
        $var1=200;
    }
    test($s);
    echo $s;
?>