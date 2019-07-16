<?php
    //$fp=@fopen('./dir1/test.txt','w');
    $fp=@fopen('./dir1/test.txt','a');
        fwrite($fp,"hello world\n123gf456\n7565fgf48");
        fwrite($fp,"hello world\n123gf456\n7565fgf48");
    
    
    
    //建議以下動作都做  
    fflush($fp);
    fclose($fp);

?>