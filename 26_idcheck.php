<?php
    include_once 'joshTool.php';
    if(isset($_POST["TWid"])){
        $id=$_POST["TWid"];
        if(checkid($id)){
            echo "ok";
        }else{
            echo "error";
        }
    }
    
    
    
?>
<form method="POST">
身分證:<input type="text" name="TWid">
<input type="submit">
</form>