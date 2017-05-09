<?php

class Router {

    //
    private $uri;

    //
    public function start(){
        $this->uri = $_SERVER['QUERY_STRING'];
        $view = new Controller();
        $db = new Model();
        $db->log();

        switch ($this->uri) {
            case '/portfolio':
                $view->show($this->uri);
                break;
            case '/resume':
                $view->show($this->uri);
                break;
            case '/about':
                $view->show($this->uri);
                break;
            default:
                $view->show('main');
        }
    }

}