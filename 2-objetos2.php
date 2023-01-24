<?php
/* 
** hereancia simple
**
*/ 
class Person {
    private $nombres ="";
    private $apellidos = "";
    private $edad = "";
    private $genero = "";

    function __construct($nombres, $apellidos, $edad, $genero){
        $this->set_nombres($nombres);
        $this->set_apellidos($apellidos);
        $this->set_edad($edad);
        $this->set_genero($genero);
    }

    function set_nombres($nombres){
        $this->nombres = $nombres;
    }

    function set_apellidos($apellidos){
        $this->apellidos = $apellidos; 
    }

    function set_edad($edad){
        $this->edad = $edad; 
    }

    function set_genero($genero){
        $this->genero = $genero; 
    }

    function print_contain (){
        echo $this->nombres;
        echo $this->apellidos;
        echo $this->genero;
        echo $this->edad;
    }

}

Class Employee extends Person {

}

$persona = new Person("Marco","Garzon","85","Masculino");
$persona->print_contain();


$empleado = new Employee("Esmeralda","Garzon","53","Femenino");
$empleado->print_contain();


?>
