<?php

    function test2(){
        global $v;
        $v+=10;
    }
    $v=100;
    test2();
    test2();
    test2();
    echo $v;

?>