//default and optional values
<?php
declare(struict_types=1);

function printOddNumbers(int $limit, $skipNumber=-1) {
    for($index=0;$index<=$limit;$index++) {
        if($index==$skipNumber) {
            continue;
        }
        if($index%2 !=0){
            echo "Odd Numbers : $index".PHP_EOL;
        }
    }
}

    function PrintEvenNumbers($limit,$skipNumber=-1) {
        for($index=0;$index<=$limit;$index++) {
            if($index==$skipNumber) {
                continue;
            }
        if($index%2 ==0) {
        echo "Even Numbers:$index".PHP_EOL;
        }
       }
       }
       printOddNumbers(13);
       PrintEvenNumbers(11);