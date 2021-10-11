<?php

class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private int $speed = 1;
    private bool $on = false;
    private float $radius = 5;
    private string $color = "blue";

    public function __construct($speed, $radius, $color, $on)
    {
        $this->speed = $speed;
        $this->radius = $radius;
        $this->color = $color;
        $this->on = $on;
    }

    public function getSlow()
    {
        return SLOW;
    }

    public function getMedium()
    {
        return MEDIUM;
    }

    public function getFAST()
    {
        return FAST;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    public function setON()
    {
        $this->on = true;
    }

    public function isON(): bool
    {
        return $this->on;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function toString(): string
    {
        $str = "";
        if ($this->isON() === true) {
            $str = "fan is on" . " " . $this->speed . " " . $this->radius . " " . $this->color;
        } else {
            $str = "fan is off" . " " . $this->speed . " " . $this->radius . " " . $this->color;
        }
        return $str;
    }

}

