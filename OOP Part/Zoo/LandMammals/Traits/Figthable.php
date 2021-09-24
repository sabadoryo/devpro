<?php


trait Figthable
{
    public function getPower() {
        return $this->power;
    }

    public function setPower(int $power)
    {
        $this->power = $power;
    }
}
