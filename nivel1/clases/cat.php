<?php

require_once 'Animal.php';

// clase que representa a un gato (hereda de Animal)
class Cat extends Animal {
   
    public function makeSound() {
        echo $this->name . " dice: Mi!<br>";
    }
}
?>