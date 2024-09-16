<?php

use MyApp\Array\a;

require 'vendor/autoload.php';

$arrayUtil = new a();


$a = [6, 3, 7, 3, 1, 10, 8, 8, 2, 3, 1, 2, 31, 3];

$aFilter = $arrayUtil->my_array_filter($a, function ($item) {
    return $item > 5;
});

print_r($aFilter);
