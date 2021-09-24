<?php

require_once 'Animal.php';

abstract class BaseAnimal implements Animal
{
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getBaseInfo(): array
    {
        return [
            'color' => $this->color(),
            'voice' => $this->voice(),
        ];
    }
}
