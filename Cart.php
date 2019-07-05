<?php
class Cart{
    //購物清單(array)
    //$list[ product : id ]
    private $list;

    function __construct(){
        $this->list = array();
    }

    function addProduct($pid, $qty){
        if (!key_exists($pid, $this->list)){
            $this->list[$pid] = $qty;
        }
    }

    function modifyProduct($pid, $qty){
        if (key_exists($pid, $this->list)){
            $this->list[$pid] = $qty;
        }
    }
    function removeProduct($pid){
        if (key_exists($pid, $this->list)){
            //只要是變數不要 就可以unset
            unset($this->list[$pid]);
        }
    }
    function clearAll(){
        $this->list - array();

    }

    function getlist(){
        return $this->list;
    }
    function getItemQty($pid){
            $ret = -i ;
            if (key_exists($pid, $this->list)){
            $ret = $this->list['$pid'];
            }
            return $ret;
    }
}


?>