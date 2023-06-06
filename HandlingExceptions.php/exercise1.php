<?php
function custom_exception_handler($exception) {
    echo 'CaughtException:' . $exception->getMessage().PHP_EOL;
}
function printEvenNumbers(int $start, int $end) {
    if ($start<=0 || $end<=0 || $start==$end) {
        throw new Exception("Incorrect input parameters");
    }
    for(;$start<=$end;$start++){
        if($start%2==0) {
            echo "Even Numbers: $start" . PHP_EOL;
        }
    }
}
set_exception_handler('custom_exception_handler');
printEvenNumbers(1,1);
    
    