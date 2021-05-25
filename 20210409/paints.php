<?php
include "clothes.php";

class Paint extends Clothes {
    protected $length;
    protected $waist;

    public function __construct($outsidename,$outsidePrize,$outsideLength,$outsideWaist){
        parent::__construct($outsidename,$outsidePrize);
        $this->length = $outsideLength;
        $this->waist = $outsideWaist;
    }
    public function getLength(){
        return $this->length; 
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