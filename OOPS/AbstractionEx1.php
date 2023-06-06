<?php
abstract class Company{
    protected $name;
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name=$name;
    }

    abstract function setExpert($subject);
    
}
class Employee extends Company {
    protected $subject;
    function setExpert($subject) {
        $this->subject=$subject;
    }
}


