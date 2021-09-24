<?php


class Conquest
{
    private LandMammal $fighter1;
    private LandMammal $fighter2;

    public ?LandMammal $winner = null;

    public string $result;

    public function __construct(LandMammal $spice1, LandMammal $spice2)
    {
        $this->fighter1 = $spice1;
        $this->fighter2 = $spice2;
    }

    public function battle()
    {
        echo "Battle begins...\n";
        sleep(5);
        if ($this->fighter1->getPower() < $this->fighter2->getPower()) {
            $this->winner = $this->fighter2;
            return;
        }

        if ($this->fighter2->getPower() < $this->fighter1->getPower()) {
            $this->winner = $this->fighter1;
            return;
        }
    }

    public function getResult(): string
    {
        if ($this->winner != null) {
            echo "We have a winner!\nPreparing results...\n";
            sleep(5);
            $className = get_class($this->winner);
            echo "Winner is $className";
            return "Winner is $className";
        } else {
            echo "The battle was equal, no winner founded!\n";
        }

        return 'No winner found';
    }
}
