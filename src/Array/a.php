<?php

namespace MyApp\Array;

class a
{
    function my_array_filter(array $a, callable $fn): array
    {
        $result = [];
        foreach ($a as $item) {
            if ($fn($item)) {
                $result[] = $item;
            }
        }
        return $result;
    }
}
