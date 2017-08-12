<?php

class Router {

    // simple router
    public function start(){
        define('SITE_OPEN', TRUE);
        $uri = $_SERVER['QUERY_STRING'];

        $db = new Model();
        $db->log();

        switch ($uri) {
            case '/ua':
                $this->view($uri.'/');
                break;
            case '/en':
                $this->view($uri.'/');
                break;
            default:
                $this->view('/ua/');
        }
    }

    // view page
    public function view($lang){
        include_once VIEW_PATH.$lang.'header.php';
        include_once VIEW_PATH.$lang.'main.php';
        include_once VIEW_PATH.$lang.'footer.php';
    }

}