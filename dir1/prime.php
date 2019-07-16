<style>
    table{
        border: solid 1px;
    }
    tr{
        border: solid 1px;
    }
    td{
        border: solid 1px;
    }
</style>
<form action="" method="POST">
    <input type="number" name="max">
    <input type="submit">
</form>


<table>

    <?php
    if (isset($_POST["max"])) {
        if(!preg_match("/^[1-9][0-9]{0,}$/",$_POST["max"])){
            echo "負值無質數!!!!!!!";
        }else{
            $range = $_POST["max"];       //搜尋質數範圍
        $checkRange;     //檢查是否為質數範圍
        $changeLine = 0;     //換行計數器
        $isPrime = true;
        $isChangeLine = true;      //是否換行
        for ($i = 2; $i <= $range; $i++) {
            $checkRange = (int) ($i / 2);
            if ($isChangeLine) {
                echo "<tr>";
            }
            for ($j = 2; $j <= $checkRange; $j++) {
                if ($i % $j == 0) {       //判斷能否被j整除

                    $isChangeLine = false;
                    $isPrime = false;
                    break;
                }
                $isPrime = true;
            }

            //若無因數則產生該數<td>
            if ($isPrime) {
                $changeLine++;
                echo "<td>{$i}</td>";
                ($changeLine % 25 == 0) ? $isChangeLine = true : $isChangeLine = false;  //每25個質數換列
            }
            if ($isChangeLine) {
                echo "</tr'>";
            }
        }
        }
        
    } 
        
    ?>

</table>