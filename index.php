<?php

require_once('Doraemon.php');

require_once('Parman.php');


$doraemon = new Doraemon(100,100,'ドラえもん');
$doraemon->cry();
$doraemon->attack();
echo $doraemon->name;

echo '<br>';

$parman = new Parman(50,50,'パーマン');
$parman->cry();
$parman->attack();

