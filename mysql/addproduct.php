
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="addproduct.php" enctype="multipart/form-data" method="POST">
    Pname: <input type="text" name="pname"><br>
    price: <input type="number" name="price"><br>
    pimage1:<input type="file" name="pimage[]"><br>
    pimage2:<input type="file" name="pimage[]"><br>
    pimage3:<input type="file" name="pimage[]"><br>
    pimage4:<input type="file" name="pimage[]"><br>
    <input type="submit">
</form>
</body>
</html>



<?php
    include_once 'mysqli.php';
if (isset($_REQUEST['pname'])) {
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $sql = "INSERT INTO product (pname,price) values ('{$pname}',{$price})";
    $mysqli->query($sql);
    $newid = $mysqli->insert_id;

    /////此處尚未理解
    if (isset($_FILES['pimage'])) {
        $pimg = $_FILES['pimage'];
        $n = 1;
        foreach ($pimg['error'] as $i => $errno) {
            if ($errno == 0) {
                copy($pimg['tmp_name'][$i], "pimgs/p_{$newid}_{$n}.jpg");
                $n++;
            }
        }
        
    }
    header('location:pmain.php');
}
    
?>

