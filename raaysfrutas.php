<?php

$frutas = ["manzana", "banana", "pera"];
$f = function($f) { return strtoupper($f); };
print_r(array_map($f, $frutas)); // [MANZANA, BANANA, PERA]



?>