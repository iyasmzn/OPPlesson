<?php
require __DIR__.'/Vehicle/Car/Mazda.php';
require __DIR__.'/Vehicle/Car/BMW.php';

use Vehicle\Car\Mazda;
use Vehicle\Car\BMW;
use Vehicle\Car\BMW as motorcycle;

$mobil  =   new BMW;
$mobil->setBrandName('alphard');
$mobil->setColor('black');
$mobil->output();
echo "<br>";
$mobil  =   new motorcycle;
$mobil->setBrandName('alphard');
$mobil->setColor('black');
$mobil->output();