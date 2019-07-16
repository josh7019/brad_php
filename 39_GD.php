<?php
    //1.canvas (new)
    //2process
    //3.output => 1.display or 2.export to file
    //4.free memory   必須釋放記憶體


    //imageCreateTrueColor(420,20)  創建畫布
    //
    //imagedestroy($canvas); 釋放記憶體
    $rate=$_GET["rate"];
    $change=420/100*$rate;
    $canvas=imageCreateTrueColor(420,20);
    $yellow=imagecolorallocate($canvas,255,255,0);
    $red=imagecolorallocate($canvas,0,255,0);
    imagefilledrectangle($canvas,0,0,420,20,$yellow);
    imagefilledrectangle($canvas,0,0,$change,20,$red);
    //imagestring();
    
    
    
    header("content-type:image/jpeg");
    imagejpeg($canvas);


    imagedestroy($canvas);