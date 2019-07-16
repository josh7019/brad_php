
    <meta charset="UTF-8" >
    
<?php
    //fopen ( string $filename , string $mode [, bool $use_include_path = FALSE [, resource $context ]] ) : resource
    //fopen()
    //$fp=@fopen('./dir1/test.txt','r');
    $fp=@fopen('https://tw.stock.yahoo.com/q/bc?s=2330','r');
    var_dump($fp);
    
    // while($g=fgetc($fp)){
    //     echo nl2br($g);
    // }
    
    // fread可以指定一次讀多少字元
    // while($g=fread($fp,1)){
    //     echo nl2br($g);
    // }
    while($line=fgets($fp)){
        if(preg_match('/href/',$line)){
            //if(preg_match('/href/',$line)){
                echo $line."<br>";
            //}
            
        }
        // echo $line;
    }

    @fclose($fp);
    
?>