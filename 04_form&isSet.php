<?php
    $sum=$x=$y='';

    if(isset($_GET["x"])){
        $x=$_GET["x"];
    $y=$_GET["y"];
    $sum=$x+$y;
    //echo "$x+$y=$sum<br>";
    echo gettype($x);
    }
    
?>
<form action="04_form&isSet.php">
    <input type=""name="x" id="x"value="<?php echo $x;?>">
    +
    <input name="y" id="y" value="<?php echo $y;?>">
    <input type="submit" value="=">
    <input type="button" value="=" onclick="add()">
    <span id="here"></span>
    <?php
        //if(isset($sum)){echo $sum;}
        echo $sum;   
    ?>
</form>

<script>
    function add(){
        let x=document.getElementById("x").value;
        let y=document.getElementById("y").value;
        let result=parseInt(x)+parseInt(y);
        document.getElementById("here").innerHTML=result;
    }
    </script>