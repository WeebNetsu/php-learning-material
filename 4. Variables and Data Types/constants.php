<?php
	/*
		Constants are variables that cannot be changed... You can declare it like this:
		define(variableName, VariableContent, caseInsensative);
		when something is case insensitive, you can write it like THIS or like this.
		The default for case-insensitive is false (just like normal variables)
	*/

	define('VARS', 'Hello World!');
	echo(VARS);
	// because i didnt make the last parameter true, i cannot do this: echo(vars);
?>