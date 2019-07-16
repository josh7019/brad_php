<?php
    
    //不給索引值的話就是直接在尾端新增一筆資料
    $a=[];
    //var_dump($a);
    $a[]=1;
    //var_dump($a);
    $a[]=2;
    //var_dump($a);
    $a[]=3;
    //echo count($a).'<br>';
    $a[12]=12;$a[2]="sl";
   // var_dump($a);
    //echo count($a).'<br>';
    
    
    //       索引4的值為1 索引3的值為4
    $b=array(4=>1,2,3=>4,5,6);

var_dump($b);
?>