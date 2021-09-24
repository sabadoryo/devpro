<?php

require_once realpath(dirname(__FILE__) . '/..') . '/BaseLandMammal.php';
require_once realpath(dirname(__FILE__) . '/..').'/CatFamily/CatFamilyInterface.php';

class Cat extends BaseLandMammal implements CatFamilyInterface
{
    public int $power = 100;

    public string $name;

    public function voice(): string
    {
        return 'meow';
    }

    public function color(): string
    {
        return 'yellow';
    }

    public function getLegsAmount(): int
    {
        return 4;
    }

    public function isCute(): bool
    {
        return true;
    }

    public function name()
    {
        return $this->name;
    }
}
