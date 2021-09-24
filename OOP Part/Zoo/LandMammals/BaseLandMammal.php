<?php

require_once 'C:\Users\HP\PhpstormProjects\untitled8\OOP Part\Zoo\BaseAnimal.php';
require_once 'C:\Users\HP\PhpstormProjects\untitled8\OOP Part\Zoo\LandMammals\LandMammal.php';
require_once 'C:\Users\HP\PhpstormProjects\untitled8\OOP Part\Zoo\LandMammals\Traits\Figthable.php';

abstract class BaseLandMammal extends BaseAnimal implements LandMammal
{
    use Figthable;
}
