<!DOCTYPE html>
<html>
<head>
	<title>Exceptions</title>
</head>
<body>

	<?php 
		try {
			echo "Hello";
		} catch (Exception $e) {
			echo $e -> getMessage();
		}
	?>

</body>
</html>