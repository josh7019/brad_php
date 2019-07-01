<?php
    $sum=$x=$y='';
    $mathtype='';

    if(isset($_GET["x"])){
        $x=$_GET["x"];
    $y=$_GET["y"];
    $mathtype=$_GET["mathtype"];
    
    //echo "$x+$y=$sum<br>";
    }
    switch($mathtype){
        case 1:
        $sum=$x+$y;
        break;
        case 2:
        $sum=$x-$y;
        break;
        case 3:
        $sum=$x*$y;
        break;
        case 4:
        $sum=(int)($x/$y)."......".($x%$y);
        break;
        default:
        $sum="bug!";break;
    }
?>
<form action="08_switch.php">
    <input type=""name="x" id="x"value="<?php echo $x;?>">
    <select name="mathtype" id="">
        <option value="1" <?php if($mathtype==1)echo "selected"?>>+</option>
        <option value="2" <?php if($mathtype==2)echo "selected"?>>-</option>
        <option value="3" <?php if($mathtype==3)echo "selected"?>>x</option>
        <option value="4" <?php if($mathtype==4)echo "selected"?>>/</option>
    </select>
    <input name="y" id="y" value="<?php echo $y;?>">
    <input type="submit" value="=">
    <input type="button" value="=" onclick="add()">
    <span id="here"></span>
    <?php
        //if(isset($sum)){echo $sum;}
        echo $sum;   
    ?>
</form>

