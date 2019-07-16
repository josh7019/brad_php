<?php
    include_once('../joshTool.php');
    session_start();
    if(!isset($_SESSION['var1'])) header('location:02_session.php');
    $var1=$_SESSION['var1'];
    echo $var1->sum();
?>