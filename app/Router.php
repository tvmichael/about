<?php

class Router {

    private $uri;

    //
    public function start(){
        $this->uri = $_SERVER['QUERY_STRING'];
        switch ($this->uri) {
            case '/main':
                $this->view($this->uri.'.php');
                break;
            case '/portfolio':
                $this->view($this->uri.'.php');
                break;
            case '/contact':
                $this->view($this->uri.'.php');
                break;
            default:
                $this->view('/main.php');
        }
    }

    //
    private function view($file){
        define('SITE_OPEN', TRUE);
        //
        include_once VIEW_PATH.'/header.php';
        include_once VIEW_PATH.$file;
        include_once VIEW_PATH.'/footer.php';
    }

}