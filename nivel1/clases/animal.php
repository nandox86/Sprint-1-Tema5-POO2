<?php
/**Necesitamos crear un tipo de datos que represente a un animal. Los animales tienen un nombre, 
 * sin embargo, no es lo mismo el sonido del “habla” de un perro, que el de un gato. Por tanto, 
 * necesitamos crear otros tipos de datos que nos ayuden a programar estos comportamientos. Básicamente, 
 * queremos un método makeSound() que muestre un mensaje diferente si se trata de un perro (por ejemplo, “Bup, bup!”) 
 * o un gato (por ejemplo “Mi!”).
 */
 abstract class Animal {
    
    protected  string $name;

    // constructor para inicializar el nombre del animal
    public function __construct($name) {
        $this->name = $name; 
    }

    //metodo abstracto para ser implementado luego
     abstract public function makeSound();
        //echo "Este animal no tiene un sonido definido.<br>";
    
}
?>
