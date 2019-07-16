<?php
    //file ( string $filename [, int $flags = 0 [, resource $context ]] ) : array
    //file_get_content
    //
    $content=file('./dir1/test.txt');
    var_dump($content);
    foreach($content as $text){
        echo $text."<br>";
    }

?>