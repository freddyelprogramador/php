<?php

class Person {
    public $nombre ="Freddy Zamora";
    public static $saludMental = "OK";
    private $edad = "52";
    protected $genero = "Masculino";
    const PROPOSITO =  "PROGRAMA DE EJEMPLO";

    function print_contain (){
        echo $this->nombre;
        echo $this->edad;
        echo $this->genero;
        echo $this->saludMental;

    }

}



$obj = new Person();
echo $obj->nombre;
//echo $obj->edad;
//echo $obj->genero;
$obj->print_contain();

?>
