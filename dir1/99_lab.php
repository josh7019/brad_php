
<style> table{
    margin:auto;
    border: solid;
}
td{border:solid;}</style>


<div>
<?php
    $pokerDack=[];
    $player=[[],[],[],[]];
    $pokerDack=shufflePoker();
    $player=dealcard($pokerDack);
    showView($player);
    // for($i=0;$i<51;$i++){
    //     echo "$pokerDack[$i]<br>";
    // }
    
    

    

    //&spades;&hearts;&diamond;&clubs;




    function shufflePoker(){
        for($i=0;$i<52;$i++){
            $pokerDack[]=$i;
            //echo "$pokerDack[$i]<br>";
        }
        
        for($i=0;$i<51;$i++){
            $temp=$pokerDack[$i];
            $select=rand($i+1,51);
            //echo "temp:$temp;select:$select;<br>";
            $pokerDack[$i]=$pokerDack[$select];
            $pokerDack[$select]=$temp;    
        }
        return $pokerDack;
    }

    function dealcard($pokerDack){
        $player=array(array(),array(),array(),array());
    
    // for($i=0;$i<=51;$i++){
    //     $player[$i%4][]=$pokerDack[$i];
    // }
        foreach($pokerDack as $key => $pokerCard){
            $player[$key%4][]=$pokerDack[$key];
        }
        return $player;
    }

    function showView($player){
        
        echo "<table>";
    $flowertype=["&spades;","&hearts;","&diamond;","&clubs;"];
    $pointtype=["A",2,3,4,5,6,7,8,9,10,"J","Q","K"];
    foreach($player as $key=>$whose){
        //sort($whose);
        echo "<tr><td>{$key}p:</td>";
        foreach($whose as $poker){
            $flower=$flowertype[floor($poker/13)];
            $color=(floor($poker/13)==1||floor($poker/13)==2)?"red":"";
            $point=$pointtype[$poker%13];
            echo "<td><span style='color:{$color}'>{$flower}</span>$point</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    }

?>
</div>