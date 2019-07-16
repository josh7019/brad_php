<?php
    if(isset($_POST['name'])&&isset($_POST['age'])){
        $name=$_POST['name'];
        $age=$_POST['age'];
        // echo "{$name}:{$age}";
        
        
         $obj=new stdClass;
         $obj->name=$name;
         $obj->age=$age;
        //  json_encode($obj);

        $ret=json_encode($obj);
         echo $ret;
    }


?>