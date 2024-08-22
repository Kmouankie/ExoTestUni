<?php
require "vendor/autoload.php";

use App\Calcul\Addition as CalculAddition;//avec alias
use App\Math;

$a = new CalculAddition();
$r = $a->add([4,5,6]);
echo "le résultat de 4 + 5 + 6 est : {$r}";
echo "<br/>";

$b = new \App\Math\Addition();//sans alias
$s = $b->add(4,5);
echo "la somme de 4 + 5 est : {$s}";
