<?php
namespace App\Views;

use kernel\View;

class loginView extends View {
    protected $twig;

    public function __construct($path){
        parent::__construct($path);
    }
    public function show($user){
        include(APP_PATH.'app/Views/header.html');
        $twig = $this->getTwig();
        echo $twig->render('usertable.twig.html.', ['id' => $user['id'], 'studentid' => ['studentid'],'name' => $user['name'],'email' => $user['email']]);

        include(APP_PATH.'app/Views/footer.html');
    }
    public function __destruct(){
    }
} 