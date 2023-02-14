<!DOCTYPE html>
<html>
<head>
	<title>CHECK</title>
</head>
<body>
	<form method="post">
		<!-- When you want input from checkbox with an array, make the name an array -->
		<input type="checkbox" name="fruits[]" value="apples">Apples<br>
		<input type="checkbox" name="fruits[]" value="bananas">Bananas<br>
		<input type="checkbox" name="fruits[]" value="pears">Pears<br>
		<input type="submit">
	</form>

	<?php
		$fruits = $_POST["fruits"]; //array created since name was "fruits[]"

		for($i=0; $i < count($fruits); $i++){ 
			echo "$fruits[$i]<br>";
		}
	?>
</body>
</html>