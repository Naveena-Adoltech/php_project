<?php
interface Animal{
    function makeSound();
}

class Dog implements Animal{
    function makeSound(){
    echo "Dog barks makes sounds";
}
}
class Cat implements Animal{
    function makeSound() {
        echo"Cat meows makes sounds";
    }
}