<?php
function custom_exception_handler($exception) {
    echo 'CaughtException:' . $exception->getMessage().PHP_EOL;
}
function divide($x,$y) : int {
    if($y<=0) {
        throw new Exception("Divide by Zero Exception might happen");

    }
    $result = $x/$y;
    return $result;
}

set_exception_handler('custom_exception_handler');
divide(1,0);



