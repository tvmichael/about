<?php

class Controller {

    //
    public function show($file){
        define('SITE_OPEN', TRUE);
        $file = $file.'.php';
        //
        include_once VIEW_PATH.SITE_LANG.'header.php';
        include_once VIEW_PATH.SITE_LANG.$file;
        include_once VIEW_PATH.SITE_LANG.'footer.php';
    }


}