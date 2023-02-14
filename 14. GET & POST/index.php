<!DOCTYPE html>
<html>
<head>
	<title>GET & POST</title>
</head>
<body>

	<!-- 
		action: sends the user to the specified page after completing the form
		method: get or post (more info in get_info.php)
		name: this is used to send information over to the next page, see it as a "variable" name="email" will store the email value. The example below stores the text inside the input inside the "name" variable
	 -->
	<form action="get_info.php" method="get">
		<input type="text" name="name">
		<input type="submit" value="Submit">
	</form>

</body>
</html>