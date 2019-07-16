<?php
    include_once 'mysqli.php';
    spl_autoload_register(function($class_name){
        require_once "{$class_name}.php";
    });
    session_start();
    
    if(!isset($_SESSION['member'])){header("location:06_login.html");}
    $member=$_SESSION['member'];$car=$_SESSION['car'];
    $icon=base64_encode($member->icon);
    echo $icon;
?>

<h1>super man</h1>
<hr>
welcome,<?php echo $member->realname;?>
<img src="data:image/jpeg;base64,<?php echo $icon;?>" alt="">
<a href="logout.php">logout</a>
<hr>
2019 copyleft . power by jojo corp;