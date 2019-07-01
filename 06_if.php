<?php

$ok = "";
$score = rand(0, 100);

    if ($score >= 90) {
        echo "A" . $score;
    } else if ($score >= 80) {
        echo "B" . $score;
        $score=57;
    } else if ($score >= 60) {
        echo "C" . $score;
    } else if ($score >= 70) {
        echo "D" . $score;
    } else {
        echo "E" . $score;
    }
          echo "<hr>";
          echo $score;  
    

    


?>