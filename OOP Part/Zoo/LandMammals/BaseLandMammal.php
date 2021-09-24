<?php

require_once realpath(dirname(__FILE__) . '/..') . '/BaseAnimal.php';
require_once realpath(dirname(__FILE__) . '/..') . '/LandMammals/LandMammal.php';
require_once realpath(dirname(__FILE__) . '/..') . '/LandMammals/Traits/Figthable.php';

abstract class BaseLandMammal extends BaseAnimal implements LandMammal
{
    use Figthable;
}
