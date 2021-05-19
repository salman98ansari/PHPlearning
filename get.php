<?php
	if(isset($_POST['name'])){ 
	echo $_POST['name'];
   	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Get data</title>
</head>
<body>
	<form method="POST" action="get.php">
		<div>
			<label>Name</label>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label>
			<input type="text" name="email">
		</div>
		<input type="submit" name="submit">
	</form>

</body>
</html>

<?php ?>