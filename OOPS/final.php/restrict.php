<?php
final class DriverFinal{
    private $updateInstructions = "Instructions";


    final function runDriverUpdate() {
        echo "Execute the update instructions" . PHP_EOL;
    }
}

// in this we cannot extends DriverFinal with any class.