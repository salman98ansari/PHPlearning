<?php
#functions

#camelcase
 function simpleFunction(){
     echo 'hello world';
     echo '<br>';
 }
 simpleFunction();

 function hello($name = 'null'){
     echo "hello $name <br>";
 }
 #hello();
 hello('salman');

function add($num1 , $num2){
    return $num1 + $num2;
}
echo add(2,3);

#by value and reference


?>