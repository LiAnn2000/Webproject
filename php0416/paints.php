<?php
include "clothes.php";

class Paint extends Tshirt {
    protected $length;
    protected $waist;

    public function __construct($outsidename,$outsidePrize,$outsideLength,$outsideWaist){
        parent::__construct($outsidename,$outsidePrize);
        $this->setName = ($outsidename);
        $this->setPrize = ($outsidePrize);
        $this->length = $outsideLength;
        $this->waist = $outsideWaist;
    }

    public function setName($outsidename){
        $this->name = $outsidename;
    }

    public function setPrize($outsidePrize){
        $this->prize = $outsidePrize;
    }

    public function setlength($outsideLength){
        $this->length = $outsideLength;
    }

    public function getLength(){
        return $this->length; 
    }

    public function setwaist($outsidewaist){
        $this->waist = $outsideWaist;
    }
    
    public function getWaist(){
        return $this->waist; 
    }

    public function doWash(){
        $string = "用手洗 ! 再".parent::doWash();
        return $string;
        //return "用手洗"; 
    }
    public function _destruct(){      
    }

}

?>