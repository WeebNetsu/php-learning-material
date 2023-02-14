<?php
	/**
	 * We'll learn about constructiors and destructors
	 */
	class Person
	{
		public $name, $eye_color, $age;

		function __construct($name, $eye_color, $age){ //constructor
			echo "The Person object was created!<br>";

			$this->name = $name;
			$this->eye_color = $eye_color;
			$this->age = $age;
		}

		public function __destruct(){
			echo "The Person object was destroyed!<br>";
		}
	}

	// note that constructor an destructor gets called when
	// creating a new object and NOT after using the object
	$person = new Person("Nicole", "green", 22);
	echo $person->name . "<br>";
?>