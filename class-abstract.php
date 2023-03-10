<?php
/* 
*  ABSTRACT CLASS
*
*  Abstract classes and methods are when the parent class has a named method, 
*  but need its child class(es) to fill out the tasks.
* 
*  An abstract class is a class that contains at least one abstract method. An 
*  abstract method is a method that is declared, but not implemented in the code.
*
*  An abstract class or method is defined with the abstract keyword:
*/


// Parent class
abstract class Car {
    //propertie
    public $name;

    //contruct
    public function __construct($name) {
      $this->name = $name;
    }

    //abstract method, its declared but not implemented
    abstract public function intro() : string;

  }


// Child classes
class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }
  
  // Create objects from the child classes
echo "\n";
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>\n";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>\n";

$citroen = new citroen("Citroen");
echo $citroen->intro();
echo "<br>\n";


?>
