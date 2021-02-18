<?php

include 'factory.php';


$dacia = AutomobilFactory::create(1300);
echo $dacia->getMake();
