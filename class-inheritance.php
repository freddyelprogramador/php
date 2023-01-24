<?php
/*
*  INHERITANCE CLASS AND INSTANTIABLE
*
*  Inheritance in OOP = When a class derives from another class.
*  The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
*  An inherited class is defined by using the extends keyword.
*/

// Parent class 
class Fruit {
    // Properties
    public $name;
    public $color;

    // Constructor
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }

    // public method
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}. \n";
    }
  }


  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? \n";
    }
  }

  $fruit = new Fruit("Fruit", "sin color");
  $fruit->intro();
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();


?>1