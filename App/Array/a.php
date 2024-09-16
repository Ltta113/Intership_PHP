<?php
function my_array_filter($a, $fn)
{
    $result = [];
    foreach ($a as $item) {
        if ($fn($item)) {
            $result[] = $item;
        }
    }
    return $result;
};
