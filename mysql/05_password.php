<?php
$password='1234567';
$password=password_hash($password,PASSWORD_DEFAULT);
echo $password."<br>";
echo strlen($password);

$password2='123456';

//                  原始        加密後
if(password_verify($password2,$password)){
    echo 'ok';
}else{
    echo 'xx';
}
?>