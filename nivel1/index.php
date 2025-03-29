<?php

/**Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre, 
 * sin embargo, no es lo mismo el sonido del “habla” de un perro, que el de un gato. Por tanto, 
 * necesitamos crear otros tipos de datos que nos ayuden a programar estos comportamientos. Básicamente,
 *  queremos un método makeSound() que muestre un mensaje diferente si se trata de un perro 
 * (por ejemplo, “Bup, bup!”) o un gato (por ejemplo “Mi!”).
 * 
 */

 define("EJERCICIO1", "Ejercicio 1");
 echo "<h1>" . EJERCICIO1 . "</h1>";
 ?>
 
<?php
require_once 'Dog.php';
require_once 'Cat.php';

// crear una instancia de la clase Dog
$dog = new Dog("Rex");

// crear una instancia de la clase Cat
$cat = new Cat("Mimi");

// llamar al metodo makeSound() para cada animal
echo "<h1>Sonidos de los animales:</h1>";
$dog->makeSound(); 
$cat->makeSound(); 
?>
