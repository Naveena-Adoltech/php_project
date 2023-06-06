<?php

class ChainMethods{
     
    function method1() {
        echo "Hello from method1" .PHP_EOL;
        $this->name="chaining Methods";
        return $this;
    }

    function method2() {
        echo "Hello from method2 ($this->name)" .PHP_EOL;
    }  
    
}
    
    $chainmethod = new ChainMethods();
    $chainmethod->method1 ()->method2 ();
