<?php
    
    //public 公開 所有人都能用
    //private 只有class內能用(繼承後將無法使用)
    //protected 子類別也能繼承
    
    
    class bike{
        protected $speed=0;
        function upSpeed(){
            $this->speed=$this->speed<1?1:$this->speed*1.2;
        }
        function downSpeed(){
            $this->speed=$this->speed<1?0:$this->speed*0.8;
        }
        function getSpeed(){
            return $this->speed;
        }
    }
    
    
    //繼承
    class scooter extends bike{
        
        private $gear=0;
        function chgear($gear){
            $this->$gear=$gear;
        }
        //Override 
        function upSpeed()
        {
            //可使用parent呼叫父類別方法
            parent::upSpeed();
            //$this->speed=$this->speed<10?10:$this->speed*1.5;             
            
        }
        function upSpeedv2()
        {
            $this->speed=$this->speed<10?10:$this->speed*1.5*$this->gear;             
        }
    }

    class person {
        private $mybike;
        private $myscooter;
        private $myname;
        
        //建構式,建構子,建構方法=>物件的初始化程序
        function __construct($name)
        {
            $this->mybike=new bike;
            $this->myscooter=new scooter;
            $this->myname=$name;
            echo "new person";
        }
        //解構式
        function __destruct()
        {
            
        }
    }


$b1 = new bike();
$b2 = new bike();
$s1 = new scooter();
$s1->chgear(2);
$s1->upSpeedv2();
$s1->upSpeedv2();
echo $s1->getSpeed() . "s1<br>";
for ($i = 0; $b1->getSpeed() < 10; $i++) {
    $b1->upSpeed();
}
$b2->upSpeed();
$b2->upSpeed();
$b2->downSpeed();
echo $b1->getSpeed() . "<br>";
echo $b2->getSpeed();
echo "<hr>";
$p1 = new person("god");
var_dump($p1);

?>