<?php
    $mysqli=new mysqli("localhost",'root','','CY');
    //var_dump($mysqli);
    //echo $mysqli->connect_errno;    用來判斷是否連接資料庫
    $mysqli->set_charset('utf-8');

    // $sql="INSERT INTO cust (cname,phone,birthday) values ('god','123','1999-01-02')";
    // $sql.=",('god2','123','1999-01-02')";
    // $sql.=",('god3','123','1999-01-02')";
    // $sql="UPDATE cust SET cname='tony' where id=3";
    // $sql="DELETE from cust where id=2";
    $cnaem='duck';$phone='0912-123456';$birthday='1999-03-02';
    //預查詢重點在變數
    $sql='INSERT INTO cust (cname,phone,birthday) values(?,?,?)';
    $pre=$mysqli->prepare($sql);      //stmt is a object of mysqli_stmt
    $pre->bind_param('sss',$cnaem,$phone,$birthday);     //前面放資料型態三個s為3個字串資料 d為整數  後面必須放變數
    $pre->execute();                //執行預查詢
    echo $pre->affected_rows;       
    echo $mysqli->error;        //先判斷error再判斷受影響列數
?>