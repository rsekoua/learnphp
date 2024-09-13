<?php
require_once 'classes/Compte.php';


$compte1 = new Compte('Benoit', 1000);


echo '<pre>';
var_dump($compte1->getTitulaire());
echo '</pre>';

