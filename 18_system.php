<?php
    echo count($_POST);
    echo "<hr>";
    foreach($_POST as $key=>$value){
        echo "$key=>$value";
    }
?>