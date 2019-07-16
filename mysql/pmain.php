<?php
include_once 'mysqli.php';
if(isset($_REQUEST['cloneid'])){
    $cloneid=$_REQUEST['cloneid'];
    $sql="INSERT INTO product (pname,price)"."SELECT pname,price FROM product WHERE id=?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param('i',$cloneid);
    $stmt->execute();
    // echo $stmt->error;
}else if(isset($_REQUEST['delid'])){
    $delid=$_REQUEST['delid'];
    // $sql="DELETE from product where id={$delid}";
    // $mysqli->query($sql);
    $sql="DELETE from product where id=?";
    $stmt=$mysqli->prepare($sql);
    $stmt->bind_param('i',$delid);
    $stmt->execute();
}
$showRows=4;
$page=1;
if(isset($_GET["page"])){
    $page=$_GET["page"];
}
$start=($page-1)*$showRows;

$sql="SELECT * from product limit {$start},{$showRows}";
$result=$mysqli->query($sql);
?>
<a href="addproduct.php">add new product</a>
<hr>
<table border="1" width="100%">
    <tr>
        <td>id</td>
        <td>pname</td>
        <td>price</td>
        <td>edit/delete/clone</td>
    </tr>
    <?php
        while($p=$result->fetch_object()){
            echo "<tr>";
            echo "<td>{$p->id}</td>";
            echo "<td><a href='showimg.php?id={$p->id}'>{$p->pname}</a></td>";
            echo "<td>{$p->price}</td>";
            echo "<td>";
            echo "<a href='edit.php?editid={$p->id}'>edit</a>|";
            echo "<a href='?delid={$p->id}' onclick='return isDelete(\"{$p->id},{$p->pname},{$p->price}\")'>delete</a>|";
            echo "<a href='?cloneid={$p->id}'>clone</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>
<!-- <a href="?"></a> -->
<!-- <a href="?"></a> -->

<script>
    function isDelete(id,name,price){
        
        return confirm("刪除id="+id+"這筆資料嗎?");
    }
</script>