<!DOCTYPE html>
<html>
<head>
	<title>Upper and lower case</title>
</head>
<body>
	<style type="text/css">
		th{
			border: 1px solid red;
		}

		td{
			padding: 0.4rem;
			border: 1px solid black;
		}
	</style>

	<?php
		$myStr = "Hello World!";
		$lowerCase = strtolower($myStr); //converts whole string to lowercase
		$upperCase = strtoupper($lowerCase); //converts whole string to uppercase
		$firstLetterUp = lcfirst($upperCase); //converts first character to lowercase
		$firstLetterDown = ucfirst($lowerCase); //converts first character to uppercase
		$firstWordUp = ucwords($lowerCase); //makes first letter of each word uppercase
	?>

	<table>
		<tr>
			<th>Function</th>
			<th>Before</th>
			<th>After</th>
		</tr>

		<tr>
			<td>strtolower()</td>
			<td><?php echo $myStr; ?></td>
			<td><?php echo $lowerCase; ?></td>
		</tr>

		<tr>
			<td>strtolower()</td>
			<td><?php echo $myStr; ?></td>
			<td><?php echo $upperCase; ?></td>
		</tr>

		<tr>
			<td>strtolower()</td>
			<td><?php echo $upperCase; ?></td>
			<td><?php echo $firstLetterUp; ?></td>
		</tr>

		<tr>
			<td>strtolower()</td>
			<td><?php echo $lowerCase; ?></td>
			<td><?php echo $firstLetterDown; ?></td>
		</tr>

		<tr>
			<td>ucwords()</td>
			<td><?php echo $lowerCase; ?></td>
			<td><?php echo $firstWordUp; ?></td>
		</tr>
	</table>

</body>
</html>