<?php
	class Person{
		public $name;
		public $age;
		public function __construct($name, $age){ //constructor
			$this->name = $name;
			$this->age = $age;

			echo "<p>Object $name which is $age was created!</p>";
		}

		//the below code only runs when the entire PHP script ended
		public function __destruct(){ //destructor (destroys object automatically)
			echo "<p>Object was destroyed!</p>";
		}
	}

	$p = new Person("Tom", 24);

	class User{
		public function __construct(){
			echo "<p>Here is another object!</p>";
		}
	}

	$u = new User();
	unset($u); //destroyes the $u User object
?>