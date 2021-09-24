<?php


class Shark extends BaseAnimal implements MarineMammal
{
    use Hydrobiont;

    private int $swimmingSpeed = 10;

    public function voice(): string
    {
       return 'shark-voice';
    }

    public function color(): string
    {
        return 'blue';
    }

    public function name()
    {
        // TODO: Implement name() method.
    }
}
