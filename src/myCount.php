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
            $counter += is_array($arr[$i]) ? 1 : 0;
            $counter += $countRecursive ? myCount($arr[$i], $countRecursive) : 1;
            $i++;
        }
        return $counter;
    }
}
