<?php
    if(!isset($_GET["account"])) die();
    include_once 'mysqli.php';
    $account=$_GET["account"];
    $sql="SELECT * from member2 where account = '{$account}'";
    $result=$mysqli->query($sql);
    
    echo $result->num_rows;

?>