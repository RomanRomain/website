<?php

namespace romanromain\website\src;

function myCount($arr, bool $countRecursive = false): int
{
    if (!is_array($arr)) {
        return 1;
    } else {
        $i = 0;
        $counter = 0;
        while (isset($arr[$i])) {
            $counter++;
            $counter += $countRecursive ? myCount($arr[$i], $countRecursive) : 0;
            echo "i = $i" . PHP_EOL;
            echo "counter = $counter" . PHP_EOL;
            $i++;
        }
        return $counter;
    }
}
