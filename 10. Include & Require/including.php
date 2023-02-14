<!DOCTYPE html>
<html>
<head>
	<title>Include</title>
</head>
<body>
	<!-- You can use include to import a php file -->
	<?php include 'header.php'; ?>

	<p>Some text</p>

	<!-- 
		include and require does the exact same thing, but require will return an error if the
		file could not be found, whilst include will only continue. If a piece of code requires a specific
		file to be imported and should not display without it, use 'require'
	 -->
	<?php require 'header.php'; ?>
</body>
</html>