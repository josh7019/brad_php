<?php
    $year=1999;
    if($year%400==0){
        echo $year."是閏年";
    }else if($year%100==0){
        echo $year."不是閏年";
    }else if($year%4==0){
        echo $year."是閏年";
    }else{
        echo $year."不是閏年";
    }




?>