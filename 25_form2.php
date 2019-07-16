<?php

    foreach($_REQUEST as $key=>$value){
        if(is_array($value)){
            foreach($value as $value2){
                echo "{$value2}";
            }
        }else{echo "{$key}=>{$value}<br>";}
        
    }
?>