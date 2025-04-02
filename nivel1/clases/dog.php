<?php

require_once 'Animal.php';


class Dog extends Animal {
   
    public function makeSound() {
        echo $this->name . " dice: Bup, bup, bup <br>";
    }
}
?>