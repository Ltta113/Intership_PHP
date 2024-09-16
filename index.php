<?php
require_once('./App/Array/a.php');

$a = [6, 3, 7, 3, 1, 10, 8, 8, 2, 3, 1, 2, 31, 3];

$aFilter = my_array_filter($a, function ($item) {
    return $item > 5;
});

print_r($aFilter);