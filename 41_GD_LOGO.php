<?php
    
        
        $img=imagecreatefromjpeg("upload/95-1P514144131.jpg");
        $yellow=imagecolorallocate($img,255,0,0);
        //必須是絕對路徑
        imagettftext($img,50,rand(-30,30),100,200,$yellow,"D:\\install2\\XAMPP\\htdocs\\Chungyo\\brad_php\\upload\\calibri.ttf","osiajd");
        imagettftext($img,50,rand(-30,30),108,200,$yellow,"D:\\install2\\XAMPP\\htdocs\\Chungyo\\brad_php\\upload\\calibri.ttf","osjd");
        header("content-type:image/jpeg");
        imagejpeg($img);
        imagedestroy($img);
    


    

?>