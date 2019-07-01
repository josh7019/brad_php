<?php
    $sum='';
    $i='';
    if(isset($_GET["n"])){
        $sum=0;
        $i=0;
        $n=$_GET["n"];
        for(;$i<=$n;$sum=$sum+$i++){
        }
    }
    

?>
<form action="">
    1+2+3+....+
<input type="number" name="n" value="<?php echo $i-1?>">
<input type="submit" value="=">
<?php echo $sum;?>
</form>



