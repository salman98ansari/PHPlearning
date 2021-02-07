<?php
# $_SERVER 
// create server array

$server =[
	'Host Server Name' => $_SERVER['SERVER_NAME'],
	'Server Soft' => $_SERVER['SERVER_SOFTWARE'],
	'root' => $_SERVER['DOCUMENT_ROOT'],
	'page' => $_SERVER['PHP_SELF'],
	'path' => $_SERVER['SCRIPT_FILENAME']

];
echo $server['Host Server Name'];
echo $server['Server Soft'];
echo "<br>";

print_r($server);

//client server

?>