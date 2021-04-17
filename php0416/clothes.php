<?php

class Tshirt {
    private $name = "衣服";
    private $prize = 100;
    
    public function __construct($outsidename,$outsidePrize){
        $this->name = $outsidename;
        $this->prize = $outsidePrize;
    }    

    public function setName($outsidename){
        $this->name = $outsidename;
    }

    public function getName(){
        return $this->name;
    }

    public function setPrize($outsidePrize){
        $this->name = $outsidePrize;
    }

    public function getPrize(){
        return $this->prize;
    }    

    public function doWash(){
        return "用洗衣机洗"; 
    }
    
    public function _destruct(){      
    }


}
?>