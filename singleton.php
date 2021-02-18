<?php


class singleton
{
    public static $instance = null;

    public $test;

    public function __construct($valoare)
    {
        $this->test = $valoare;
    }

    public static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new singleton(10);
        }

        return self::$instance;
    }

    /**
     * @return mixed
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * @param mixed $test
     */
    public function setTest($valoare)
    {
        $this->test = $valoare;
    }
}