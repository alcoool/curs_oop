<?php


class AutomobilFactory
{
    public static function create($make)
    {
        return new Masina($make);
    }

}

class Masina
{
    private $vehiculeMake;

    public function __construct($make)
    {
        $this->vehiculeMake = $make;
    }

    public function getMake()
    {
        return $this->vehiculeMake;
    }
}