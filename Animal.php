<?php

include 'Fiinta.php';

class Animal extends Fiinta
{
    const PICIOARE = 4;

    public $culoare = 'rosu';

    protected $ochi = 'celular';

    private $blana = false;

    /**
     * Animal constructor.
     * @param string $culoare
     * @param string $ochi
     * @param bool $blana
     */
    public function __construct(string $culoare, string $ochi, bool $blana)
    {
        $this->culoare = $culoare;
        $this->ochi = $ochi;
        $this->blana = $blana;

        echo 'animal sa nascut';
    }


    /**
     * @return string
     */
    public function getOchi()
    {
        return $this->ochi;
    }

    /**
     * @param string $ochi
     */
    public function setOchi($ochi)
    {
        $this->ochi = $ochi;
    }

    /**
     * @param bool $blana
     */
    public function setBlana($blana)
    {
        $this->blana = $blana;
    }

    /**
     * @return bool
     */
    public function getBlana()
    {
        return $this->blana;
    }

    function sunet($imperechere){
        echo 'oac oac';
    }

    /**
     * @param string $culoare
     */
    public function setCuloare($culoare)
    {
        $this->culoare = $culoare;
    }

    function showColor()
    {
        echo $this->culoare;
    }

    public function manaca()
    {
        echo 'miam miam';
    }

    public function spala()
    {
        // TODO: Implement spala() method.
    }


    public function naparleste()
    {
        // TODO: Implement naparleste() method.
    }
}