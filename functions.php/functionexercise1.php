<?php
function getFullName(string $firstname, string $lastname) : string {
    $fullname = $firstname . "," . $lastname;
    return $fullname;
}
echo getFullName("Naveena","Kandasamy") . PHP_EOL;
