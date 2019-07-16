<?php

sayya();sayya();
sayhello("joe");
sayhello2();
sayhello2("joe","peter","ben");
sayhello3();
sayhello3("sl");
sayhello3("joe","peter","ben");
    function sayya(){
        echo 'ya<br>';
    }
    function sayhello($n=1,$name='world'){
        for($i=0;$i<$n;$i++){
            echo "hello!{$name}<br>";
        }
        
    }
    function sayhello2(...$name){
        foreach($name as $n){
            echo "hello!$n<br>";
        }
    }

    function sayhello3(){
        $names=func_get_args();
        foreach($names as $n){
            echo "hello!$n<br>";
        }
    }
?>