<form action="" method="POST">
    乘法表最大值:<input type="number" name="ends">
    <input type="submit">
</form>

<?php
    
    
    define("rows",2)  //常數設定
    //取常數不須加$   ex:rows*2
?>
<style>
    tr{
        border:1px solid;
        
    }
    td{
        border:1px solid;
        text-align: center;
    }
</style>

<table style="width:100%;border:1px solid">
    
        <?php

        if (isset($_POST['ends'])) {
            $start = 2;
            $end = $_POST['ends'];
            $row = 5;
            $colum = ceil(($end - $start + 1) / $row);

            for ($k = 0; $k < $row; $k++) {
                echo "<tr>";
                for ($i = $start; $i < $start + $colum; $i++) {
                    if (($k + $i) % 2 == 0) {
                        echo "<td bgcolor='gray'>";
                    } else {
                        echo "<td bgcolor='pink'>";
                    }

                    $x = $i + $colum * $k;
                    if ($x > $end) continue;
                    for ($j = 1; $j <= 9; $j++) {

                        $sum = $x * $j;

                        echo "{$x}x{$j}={$sum}<br>";
                    }
                    echo "</td>";
                }
                echo "</tr>";
            }
        } 
        ?>
        </tr>
    


</table>