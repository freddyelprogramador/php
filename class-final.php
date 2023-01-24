<?php
/*
*  FINAL CLASS
*
*  PHP Final Class works based on the declaration just by adding the FINAL keyword before the class word. 
*  Final Class works without extending the class. PHP Final class can’t be extended just like the other normal classes. 
*  If the Final class is extended using any other normal class then Final Class will lead the PHP to return FATAL ERROR in the browser output. 
*
*/

final Class BaseClass{
    function printData($val1,$val2){
       $add=$val1+$val2;
       echo "Sum of given no=".$add;
       }
    }
 class Child extends BaseClass{
    function printData($val1,$val2){
       $m=$val1*$val2;
       echo "Multiplication of given no=".$m;
       }
    }

//This class isn't instantiable because it is final.
 $obj= new Child();  // ERROR
 $obj->printData(20,20);

?>