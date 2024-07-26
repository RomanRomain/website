<?php

namespace romanromain\website;

use function romanromain\website\src\myCount;

require __DIR__ . "/src\myCount.php";

$myArray = [[1, 23, 24, 12], 2, 3, 4, 5];
echo myCount($myArray, true) . PHP_EOL;
echo count($myArray, COUNT_RECURSIVE);
