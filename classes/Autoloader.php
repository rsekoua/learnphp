<?php

namespace App;

class Autoloader
{
    static function register()
    {
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        //On recupèer dans $class la totalié du namespace de la classe concernée (App\Client\compte). On retire App\ (client\Compte)
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);
        //on remplace les \ par des /
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $fichier = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';

        if (file_exists($fichier)) {
            require_once $fichier;
        }


    }
}