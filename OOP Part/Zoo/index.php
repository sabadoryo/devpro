<?php

require_once 'LandMammals/CatFamily/Cat.php';
require_once 'LandMammals/CatFamily/Lion.php';
include 'LandMammals/Conquest.php';

$cat = new Cat('Jessy');

$lion = new Lion('Mufasa');
$lion->setPower(100000);
$lion1 = new Lion('Leo');

$conquest = new Conquest($lion1,$lion);

$conquest->battle();

$conquest->getResult();

echo $conquest->winner->name;

