<?php
    
    if(isset($_GET["filename"])){
        $filename=$_GET["filename"];
        $content="./".$_GET["content"];
    $fp=fopen("./dir1/{$filename}",'w');
    
    
    
        if(@fwrite($fp,$content)){

            header("Location: dir1/{$filename}");
        }else{ echo "write error";}
    // fflush($fp);
    // fclose($fp);
    }else{ die ("error");}
    
?>