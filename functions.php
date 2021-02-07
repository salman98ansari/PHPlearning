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
echo '<br>';

#by value and reference
// By Reference

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

addFive($myNum);

echo "Value: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>";

?>