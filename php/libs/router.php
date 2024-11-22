<?php 
namespace lib;

use Throwable;
use Error;

function route($rpath, $method) {
    try {
        
        if($rpath === '') {
            $rpath = 'home';
        } else if($rpath === 'login/') {
            $rpath = 'login';
        } else if($rpath === 'register/') {
            $rpath = 'register';
        }
        //新規
        // $targetFile = get_controller_path($rpath);

        $targetFile = SOURCE_BASE . "controllers/{$rpath}.php";

        
        if(!file_exists($targetFile)) {
            require_once SOURCE_BASE . "views/404.php";
            return;
        }

        require_once $targetFile;
        
        $rpath = str_replace('/', '\\', $rpath);
        $fn = "\\controller\\{$rpath}\\{$method}";

        $fn();
        
    } catch (Throwable $e) {

        echo $e->getMessage();
        echo "何かがおかしいようです";
        require_once SOURCE_BASE . "views/404.php";
        
    }

}