<?php
$some_boolean_condition= false;
if ($some_boolean_condition) {
    echo 'This is a if block condition'.PHP_EOL;
    echo 'This is a true condition'.PHP_EOL;

}
else {
    echo 'This is a else block condition'.PHP_EOL;
    echo 'This is a false condition'.PHP_EOL ,"<br>";
   
}
$one_more_condition=true;
if($some_boolean_condition && $one_more_condition) {
echo 'This is a if block condition'.PHP_EOL;
    echo 'This is a true condition'.PHP_EOL;

}
else {
    echo 'This is a else block condition'.PHP_EOL;
    echo 'This is a false condition'.PHP_EOL ,"<br>";
}
?>


<!DOCTYPE html>
<html>
   <head>
    <title> IF ELSE STATEMENTS </title>
    </head>
    <body>
       <?php if ($some_boolean_conditon ) {?> 
        <h1> This is a true condition. </h1>
        <?php } else { ?>
        <h1> This is false condition.</h1>
    <?php } ?>
    </body>
    </html>


