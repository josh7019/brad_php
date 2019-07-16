<?php
    include_once 'mysqli.php';
if(isset($_REQUEST['editid'])){
    $editid=$_REQUEST['editid'];
    $sql="SELECT * from product where id= {$editid}";
    $result=$mysqli->query($sql);
    $p=$result->fetch_object();
}else if(isset($_REQUEST['pname'])){
    $pname=$_REQUEST['pname'];
    $price=$_REQUEST['price'];
    $id=$_REQUEST['id'];
    $sql="update product set pname=?,price=? where id=?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param('ssi',$pname,$price,$id);
    $stmt->execute();
    header('location:pmain.php');
}
    
?>
<meta charset="utf-8">
<form action="" method="GET">
    Pname: <input type="text" name="pname" value="<?php echo $p->pname;?>"><br>
    price: <input type="number" name="price" value="<?php echo $p->price;?>"><br>
            <input type="hidden" name="id" value="<?php echo $p->id;?>">
    <input type="submit">
</form>