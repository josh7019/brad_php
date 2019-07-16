<?php
    include_once 'mysqli.php';

    if(isset($_POST['account'])){
        $account=$_POST['account'];
        $password=$_POST['password'];
        $realname=$_POST['realname'];
        // $icon=$_POST['icon'];
        $password=password_hash($password,PASSWORD_DEFAULT);
        $icon='';
        if($_FILES['icon']['error']==0){
           $icon=addslashes(file_get_contents($_FILES['icon']['tmp_name'])) ;
        }

        $sql="INSERT INTO member2 (account,password,realname,icon) VALUES "."('{$account}','{$password}','{$realname}','{$icon}')";
    if($mysqli->query($sql)){
        header("location:06_login.html");
    }else {
        echo 'error'.$sql;
    }
    }

    
?>


<form method="POST" enctype="multipart/form-data" onsubmit="return isSubmit();" action=""><br><br>
    account:<input type="text" name="account" id="account" onchange="checkAccount()"><span id='showok'></span><br><br>
    password:<input type="password" name="password"><br><br>
    realname:<input type="text" name="realname"><br><br>
    Icon:<input type="file" name="icon"><br><br>
    <input type="submit" value="註冊">
</form>



<script>
    let isdataok=false;
    let xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function(){
        if(xhttp.readyState==4&&xhttp.status==200){ //是否成功傳送請求
            if(xhttp.responseText==0){
                //確認帳號不重複
                
                document.getElementById("showok").innerHTML="ok";
                isdataok=true;
            }else{
                document.getElementById("showok").innerHTML="xx";
            }
        }
    }
    function checkAccount(){
        var account=document.getElementById("account").value;
        xhttp.open('GET','04_checkAccount.php?account='+account,true);
        xhttp.send();
    }

    function isSubmit(){
        
        return isdataok
    }
</script>