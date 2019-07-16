<?php
    //Model
    function proccessData(){

        $data['title']="brad big company";
        $data["who"]="brad";
        
        
        //var_dump($query);
        return $data;
    }


    //call view
    function loadview($viewFile,$data){
        $query=http_build_query(array("data"=>$data));     //轉成類似querystring的形式
        $view=file_get_contents("http://localhost/Chungyo/brad_php/MVC/views/{$viewFile}.php?{$query}");
        

        echo $view;
    }
    $data=proccessData();
    loadview('01_view',$data);
?>