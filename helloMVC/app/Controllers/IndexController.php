<?php

namespace App\Controllers;

use kernel\Controller;
use App\Model\indexModel;

class IndexController extends Controller {

    public function run(){
        $username = new indexModel();
        $result = $username->printname();

        print $result;
    }
}