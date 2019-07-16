<?php
    if(!isset($_REQUEST['id'])) header('location:pmain.php');
    $id=$_REQUEST['id'];
    echo $id;
    for($i=1;$i<=5;$i++){
        $pfile="pimgs/p_{$id}_{$i}.jpg";
        echo $pfile;
        if(file_exists($pfile)){
            echo "<img src='{$pfile}'><hr>";
        }
    }
?>