<!DOCTYPE html>
<html>
<head>
	<title>User Input</title>
</head>
<body>
	<form method="get" action="user input.php">
		<label>Name: </label>
		<input type="text" name="name" required>
		<br>	
		<label>Age: </label>
		<input type="number" name="age" required value="20" min="10" max="100">	
		<br>
		<input type="submit" value="Submit">
	</form>

	<?php
		$name = $_GET["name"];
		$age = $_GET["age"];

		if($name != false){
			echo "<p>Hello $name! You are $age years old!</p>";	
		}
	?>
</body>
</html>