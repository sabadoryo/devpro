<?php


class Fish extends BaseAnimal implements MarineMammal
{
    use Hydrobiont;

    private int $swimmingSpeed = 10;

    public function voice(): string
    {
        return 'fish-voice';
    }

    public function color(): string
    {
        return 'grey';
    }

    public function name()
    {
        // TODO: Implement name() method.
    }
}
