<?php
    if(!isset($_FILES['upload'])) exit(0);
    $upload=$_FILES['upload'];
    var_dump($upload);

    foreach($upload["error"] as $key=>$value){
        if($value==0){
            if(is_uploaded_file($upload["tmp_name"][$key])){
                if(move_uploaded_file($upload["tmp_name"][$key],"upload/{$upload['name'][$key]}")){
                    echo "copy ok";
                }else{
                    echo "copy fail";
                }
            }
        }
    }


?>