<?php

require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$sheep = new Animal("Shaun");

$sheep->getName();
echo "<br>";
$sheep->getLegs();
echo "<br>";
$sheep->getCold();
echo "<br>";

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo "<br>";

$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"