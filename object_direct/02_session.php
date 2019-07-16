<?php
    include_once('../joshTool.php');
    session_start();
    
$var1=new student(50,60,70);
$sum=$var1->sum();
$avg=$var1->avg();
echo "sum: $sum avg:avg:$avg";
$_SESSION['var1']=$var1;
// header('location:03_test.php');
// $var1[2]=100;
$var1->setch(50);
?>

<a href="03_test.php">next page</a>