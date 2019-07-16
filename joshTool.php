<?php

    function checkid($id) : bool {
        $result=false;
        $matt="/^[A-Z][12][1-9]{8}$/";
        $checkchar=preg_match($matt,$id);
        
        if($checkchar){
            $replaceCode="ABCDEFGHJKLMNPQRSTUVXYWZIO";
            $c1=substr($id,0,1);
            $n12=strpos($replaceCode,$c1)+10;
            $n1=(int)($n12/10);
            $n2=$n12%10;
            $n3=substr($id,1,1);
            $n4=substr($id,2,1);
            $n5=substr($id,3,1);
            $n6=substr($id,4,1);
            $n7=substr($id,5,1);
            $n8=substr($id,6,1);
            $n9=substr($id,7,1);
            $n10=substr($id,8,1);
            $n11=substr($id,9,1);
            $sum=$n1+$n2*9+$n3*8+$n4*7+$n5*6+$n6*5+$n7*4+$n8*3+$n9*2+$n10+$n11;
            echo $sum;
            if($sum%10==0){
                $result=true;
            }
        }
        //echo $checkchar;
        return $result;
    }

    function creatid($gender=false){
        
    }


    class student {
        private $ch,$eng,$math;
        public function __construct($ch,$eng,$math)
        {
            $this->ch=$ch;
            $this->eng=$eng;
            $this->math=$math;
        }
        public function sum(){
            return $this->ch+$this->eng+$this->math;
        }
        public function avg(){
            return $this->sum()/3;
        }
        public function setch($newch){
            $this->ch=$newch;
        }

    }

?>