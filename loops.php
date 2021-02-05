<?php 

#loops

#for loop
# @param , init , incremtn

for($i=0; $i<10; $i++){
    echo 'number'.$i;
    echo '<br>';
}

#for each

$people = array('Brad' => 'brad@gmail.com', 
'Jose' => 'jose@gmail.com', 'William' => 'will@gmail.com');

	foreach($people as $person => $email){
		echo $person.': '.$email;
		echo '<br>';
	}

?>