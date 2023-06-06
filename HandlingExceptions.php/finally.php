<?php
function custom_exception_handler($exception) {
    echo 'CaughtException:' . $exception->getMessage().PHP_EOL;
}
set_exception_handler('custom_exception_handler');

try{
    throw new Exception("Exception is raised!");
}finally{
    echo "This will be printed before exception". PHP_EOL;
}
