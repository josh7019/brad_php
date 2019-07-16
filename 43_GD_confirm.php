<?php
    session_start();
    if(isset($_SESSION['confirmString'])){
        $confirmString=$_SESSION['confirmString'];
        $canvas=imagecreatetruecolor(240,100);
        $yellow=imagecolorallocate($canvas,rand(50,255),rand(50,255),rand(50,255));
        $black=imagecolorallocate($canvas,0,0,0);
        imagefilledrectangle($canvas,0,0,240,100,$yellow);
        for($i=0;$i<4;$i++){
            $confirm=substr($confirmString,$i,1);
            // $confirmString.=$confirm;
            imagettftext($canvas,40,rand(-50,50),($i+1)*45,60,$black,
        "D:\\install2\\XAMPP\\htdocs\\Chungyo\\brad_php\\upload\\calibri.ttf",$confirm);
        }

    }
    // $codeArea="123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    
    
    
    
    // $_SESSION['confirmString']=$confirmString;
    header("content-type:image/jpeg");
    imagejpeg($canvas);
?>