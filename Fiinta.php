<?php

include 'Functii.php';


abstract class Fiinta implements Functii
{
    abstract public function manaca();

    public function faCaca(){
        echo 'carnat';
    }
}