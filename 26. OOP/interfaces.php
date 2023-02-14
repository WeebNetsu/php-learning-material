<?php
	// is used to declare methods before they're used
	interface AnimalInterface{
		public function makeSound(); //declares an method
	}

	interface HumanInterface{
		public function treatPet();
	}

	//you can implements more than 1 interface at a time
	class Dog implements AnimalInterface, HumanInterface{
		function makeSound(){
			echo "Woof!<br>";
		}

		function treatPet(){
			echo "Come here, boy<br>";
		}
	}

	$myObject = new Dog();
	$myObject->makeSound();
	$myObject->treatPet();
?>