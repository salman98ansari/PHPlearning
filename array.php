<?php


//indexed array

$people = array('salman', "ansari" , "khan");
$id = array(25,26,28);

$cars=["honda", "maruti"];
$cars[]="salman";
$cars[]="hello";

echo $cars[2];

echo count($cars);
//print_r($cars); // array print
//var_dump($cars);

//Associative Arrays i.e key and values

$people =['salman' => 20 , 'ashu' => '35', 'azam'=> 45];
echo $people['salman'];

$people['mobin']= 55;
echo $people['mobin'];


//multidemisonal array

$bike=[
	[
		'activa', 'pulsar', 'hayabusa'
	],
		[
		'activas', 'pulsars', 'hayabusas'
	],
]; 

echo $bike[0][2];
echo $bike[1][1];









?>


