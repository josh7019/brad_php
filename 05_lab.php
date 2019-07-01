<?php
    $sum=$x=$y='';

    if(isset($_GET["x"])){
        $x=$_GET["x"];
    $y=$_GET["y"];
    //$sum=floor($x/$y)."......".($x%$y);
    $sum=(int)($x/$y)."......".($x%$y);
    //echo "$x+$y=$sum<br>";
    echo gettype($x);
    }
    
?>
<form action="05_lab.php">
    <input type=""name="x" id="x"value="<?php echo $x;?>">
    /
    <input name="y" id="y" value="<?php echo $y;?>">
    <input type="submit" value="=">
    
    <?php
        //if(isset($sum)){echo $sum;}

        echo $sum;   
    ?>
</form>
