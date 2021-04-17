<?php

include "dowash.php";

class human {

    public $name;
    public $age;
   
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    public function dowash(){
        return "洗干净了";
    }
    
    public function _destruct(){

    }
        
}

?>