<?php

class Router {
    private $uri = '/';

    public function p($text){
        echo '<div><pre>';
        print_r($text);
        echo '</pre></div>';
    }

    public function start(){
        // read config file

        $this->uri = $_GET;

        $this->p($this->uri);
        echo 'start';
    }



} // end class