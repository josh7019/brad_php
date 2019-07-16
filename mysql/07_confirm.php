<?php
    include_once 'mysqli.php';
    spl_autoload_register(function($class_name){
        require_once "{$class_name}.php";
    });
    session_start();
    if(!isset($_REQUEST['account'])) header('location:06_login.html');
        $account=$_REQUEST['account'];
        $password=$_REQUEST['password'];
        $sql="SELECT * FROM member2 where account=?";
        $stmt=$mysqli->prepare($sql);
        $stmt->bind_param('s',$account);
        $stmt->execute();
        
        $result=$stmt->get_result();
        if($result->num_rows>0){
            $member=$result->fetch_object();
            // var_dump($member);
            if(password_verify($password,$member->password)){
                $_SESSION['member']=$member;
                $_SESSION['car']=new car();
                header("location:main.php");
                // echo "ok";
            }else{
                header ("location:06_login.html");
            }
        }else {
            echo "noaccount";
        }

?>