<?php

namespace App\Controllers;

use kernel\Controller;
use App\Model\indexModel;
use App\Views\indexView;

class IndexController extends Controller {

    public function run(){
        $username = new indexModel();
        $result = $username->printname();

        //print $result;
        (new indexView())->show($result);
    }
}