<?php

include 'singleton.php';

$single = singleton::getInstance();

echo $single->getTest();

$single->setTest(20);

$single2 = singleton::getInstance();

echo $single2->getTest();
echo $single->getTest();