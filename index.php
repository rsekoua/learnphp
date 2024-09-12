<?php
require_once 'classes/Compte.php';


$compte1 = new Compte('Benoit', 1000);

$compte1->deposer(500);
echo '<pre>';
var_dump($compte1);
echo '</pre>';

$compte1->retirer(2000);

echo '<pre>';
var_dump($compte1);
echo '</pre>';