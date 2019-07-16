<?php
// $ch=curl_init("http://www.bradchao.com/apptest/posttest1.php");
$ch=curl_init("http://localhost/Chungyo/brad_php/curl/03_response.php");
$dataString="name=god&age=18";
curl_setopt($ch,CURLOPT_CUSTOMREQUEST,'POST');//設定請求為POST
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$dataString);//設定POST資料為$dataString

// $ret=curl_exec($ch);
// curl_close($ch);
// echo $ret;
$obj=new stdClass;
$ret=curl_exec($ch);
var_dump($ret);
$obj=json_decode($ret);
var_dump($obj);
echo $obj->name.":".$obj->age;
curl_close($ch);
