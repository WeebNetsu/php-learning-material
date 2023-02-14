<?php
	class Person{ //person object
		public $age; //public - can be accessed from anywhere in the code
		public function speak(){
			echo "Hello!<br>";
		}
		public function getAge(){
			echo $this->age; //basically this.age
		}
	}

	$lenny = new Person; //create an instance
	$lenny->speak(); //basically lenny.speak(); (if using JS/Java)
	$lenny->age = 17;
	$lenny->getAge();
?>