<?php
require __DIR__ . '/SimpleClass.php';

$memBefore = memory_get_usage();

$objCount = 1;

while ($objCount <= 1000000) {
    $newObj = new SimpleClass();
    $newObj->value = rand(0, 1000);
    $newObj->self = $newObj;
    
    if (0 === $objCount % 500) {
        $memAfter = memory_get_usage();
    
        $usage = $memAfter - $memBefore;
    
        echo 'Used ' . $usage . ' bytes' . PHP_EOL;
    }
    
    $objCount++;
}
