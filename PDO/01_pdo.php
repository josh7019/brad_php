<meta charset="UTF-8">
<?php
    $dsn = "mysql:host=localhost;dbname=cy";
    $opt=array(
        PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8'
    );
    $pdo=new PDO($dsn,'root','',$opt);
    $result=$pdo->prepare('SELECT * from product');
    $result->execute();

    while($product=$result->fetch(PDO::FETCH_OBJ)){
        echo $product->id . ":" .$product->pname ;
    }



?>