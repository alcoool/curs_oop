<?php
include 'Animal.php';

class Broasca extends Animal
{


    /**
     * Broasca constructor.
     */
    public function __construct()
    {
        echo $this->getOchi();

        parent::__construct('maro', 'verzi', true);

        echo $this->getOchi();


        echo 'M-am nascut';


    }

//    public function __destructor()
//    {
//        echo 'Am murit';
//    }

    function sunet($obigat, $imperechere=false)
    {
        if($imperechere){
            echo 'miau miau';
        } else {
            echo 'Ham ham';
        }

        parent::sunet($imperechere);

        $ceva = $this->ochi;

        $this->faCaca();

    }
}