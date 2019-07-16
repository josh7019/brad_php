<?php
    //str_split()  切割  使用正規表示
    //str_split("/[\s,]/","abc,def,ghi")
    $mystr="abc";
    $findme="a";
    $pos=strpos($mystr,$findme);
    if($pos!==false){
        echo "find";
    }else{
        echo "none";
    }



?>