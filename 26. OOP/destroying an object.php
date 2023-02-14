<?php
	class MyClass{
		function __construct(){
			echo "Created Object!<br>";
		}

		function call(){
			echo "Part of object<br>";
		}

		function __destruct(){
			echo "Object Destroyed<br>";
		}
	}

	$class = new MyClass();
	unset($class); //calls destructor and destroyes object
	$class->call(); //doesnt get called since object was destroyed
?>