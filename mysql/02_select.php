<?php
    $mysqli = new mysqli("localhost", 'root', '', 'CY');
    $mysqli->set_charset('utf-8');
    $sql = 'SELECT * from cust';
    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $stmt->store_result();

    echo $stmt->num_rows . "<hr>";
    $stmt->bind_result($id, $cname, $phone, $birthday);     //傳入參數
    $ret = new stdclass;      //stdclass為物件最源頭  所有物件接繼承自stdclass    等同javascript object
    if ($stmt->num_rows > 0) {
        $ret->result=$stmt->num_rows;
        $row = [];
        while ($stmt->fetch()) {
            //echo "{$id}:$cname:$phone:$birthday<br>";
            $row['id'] = $id;
            $row['cname'] = $cname;
            $row['phone'] = $phone;
            $row['birthday'] = $birthday;
            $ret->data[] = $row;
        }
    } else {
        $ret->result="no data";
     }
    $stmt->free_result();
    $stmt->close();

    echo json_encode($ret);

    ?>