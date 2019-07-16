<?php
    date_default_timezone_set('Asia/Taipei');
    //@可以抑制錯誤訊息
    //die('')  exit('')為同樣功能
    $path='D:\ChungYO_LAB';
    $path2=".";
    $fp=@opendir($path2) or die('server busy');
    var_dump($fp);
    
    while($str=readdir($fp)){
        $file="{$path2}/{$str}";
        $len=filesize("{$path2}/{$str}");
        echo "<br>{$str}:{$len}";
        if(is_dir($file)){
            echo "=>dir";
        }else if(is_file($file)){
            echo "=>file";
        }
        $mtime=date('Y-m-d H:i:s',filemtime($file));
        echo "<br>$mtime";
    }
    
    //unlink
    
    
?>