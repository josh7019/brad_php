<?php
    
    $dstw=240;
    $dsth=240;
    $src=imagecreatefromjpeg("upload/coffee2.jpg");
    $srcw=imageSX($src);
    $srch=imageSY($src);//取得圖片的長寬
    $dst=imagecreatetruecolor($dstw,$dsth);
    // imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , 
    // int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h ) : bool
    
    //等比例縮放
    if($srcw>$srch){
        $dstX=240;
        $dstY=$dsth*$srch/$srcw;
    }else{
        $dstX=$dsth*$srcw/$srch;
        $dstY=240;
    }
    
    imagecopyresampled($dst,$src,0,0,0,0,$dstX,$dstY,$srcw,$srch,);
    header("content-type:image/jpeg");
    imagejpeg($dst,"dir1/newcoffee.jpg");
    imagedestroy($src);
    imagedestroy($dst);
?>