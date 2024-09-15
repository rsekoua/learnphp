<?php


use App\Autoloader;
use App\Banque\CompteCourant;

require "classes/Autoloader.php";
Autoloader::register();

$compte1 = New CompteCourant("Benoit", 1000,500);



echo "<pre>";
var_dump($compte1);
echo "</pre>";
