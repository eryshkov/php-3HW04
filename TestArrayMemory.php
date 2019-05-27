<?php

$memBefore = memory_get_usage();

$arr = range(1, 1000000);

$memAfter = memory_get_usage();

$usage = ($memAfter - $memBefore) / count($arr);

echo 'One element at $arr uses ' . $usage . ' bytes' . PHP_EOL;
