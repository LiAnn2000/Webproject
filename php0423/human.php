<?php

class Human {

    private $run;
    public $name;

    public function _construct($name){
        $this->name = $name;
    }

    public function setRun(Runner $runner)
    {
        $this->run=$runner;
    }

    public function getRun() : Runner
    {
        return $this->run;
    }

}

?>