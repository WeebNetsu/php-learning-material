<?php
	// functions are made just like in JS
	// functions are not case sensative

	function helloWorld(){
		echo "Hello World!<br>";
	} 

	helloworld();

	function multiply($num1, $num2){ //they can also use parameters
		$answer = $num1 * $num2;

		echo $answer;
	}

	multiply(2, 5);

	function sayHello($name = 'John'){ //default parameter
		echo "<br>Hello " . $name;
	}

	sayHello('Josh');
	sayHello();

	function result($num1, $num2){
		echo "<br>";

		return $num1 / $num2; //you can also use return
	}

	echo result(20, 5);
?>