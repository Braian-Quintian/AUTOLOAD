<?php
    function autoload($class){
        $carpeta = [
            dirname(__DIR__) . "/scripts/clients/",
            dirname(__DIR__) . "/scripts/compra/",
        ];

        foreach ($carpeta as $ruta) {
            if ($handler = opendir($ruta)) {
                while (($file = readdir($handler))) {
                    if ($file != "." && $file != "..") {
                        echo $file."\n";
                        require_once $ruta . "/" . $file;
                    }
                }
            }
        }
    }

    spl_autoload_register('autoload');

    new \app\user\usuario();