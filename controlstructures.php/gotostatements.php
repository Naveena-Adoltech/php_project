<?php


$inputvalue=0;
if ($inputvalue <= 0) {
    goto error_block;
}


error_block:
 echo "This is a error block and can be executed anywhere".PHP_EOL;