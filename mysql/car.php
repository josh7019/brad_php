<?php
    class car{
        private $list;      //$list=>array  ,$list['$pid']=$qty
        function __construct()
        {
            $this->list=array();
        }

        function addproduct($pid,$qty){
            if(!key_exists($pid,$this->list)){
                $this->list[$pid]=$qty;
            }
        }
        function modifyproduct($pid,$qty){
            if(key_exists($pid,$this->list)){
                $this->list[$pid]=$qty;
            }
        }
        function remove($pid){
            if(key_exists($pid,$this->list)){
                unset($this->list[$pid]);
            }
        }
        function removeAll(){
            $this->list=array();
        }
        function getAll(){
            return $this->list;
        }
        function getItemQty($pid){
            $ret=-1;
            if(key_exists($pid,$this->list)){
                $ret=$this->list[$pid];
            }
            return $ret;
        }
        
    }
?>