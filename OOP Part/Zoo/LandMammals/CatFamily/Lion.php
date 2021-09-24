<?php

require_once realpath(dirname(__FILE__) . '/..') . '/BaseLandMammal.php';
require_once realpath(dirname(__FILE__) . '/..').'/CatFamily/CatFamilyInterface.php';


class Lion extends BaseLandMammal implements CatFamilyInterface
{
    public string $name;

    public int $power = 1000;

    public function voice(): string
    {
        return 'roar';
    }

    public function color(): string
    {
        return 'orange';
    }

    public function isCute(): bool
    {
        return false;
    }

    public function getLegsAmount(): int
    {
        return 4;
    }

    public function name()
    {
        return $this->name;
    }
}
