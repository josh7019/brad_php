<?php
    //自動引入與class相同名子的檔案
    spl_autoload_register(function($class_name){
        require_once "{$class_name}.php";
    });
    // include_once 'testclass.php';
    // include_once 'testclass2.php';
    $obj1=new myclass1;
    $obj1->showMe();
    $obj2=new myclass2;
    $obj2->showMe();
    $c1=new car;
    $c1->addproduct('P001',5);
    $c1->addproduct('p002',4);
    $mylist=$c1->getAll();
    var_dump($mylist);
?>