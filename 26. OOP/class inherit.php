<?php
	class Animal{		
		public $name = "Jerrold";

		public function hi(){
			echo "Hi from Animal";
		}

		final function noOwerrite(){
			echo "This function cannot be overriten";
		}
	}

	//class Dog inherits all methods from Animal
	class Dog extends Animal{
		// The blow code will give an error because it is trying to overrite 
		// a final function
		/*function noOwerrite(){
			echo "Overrite";
		}*/
	}

	$d = new Dog();
	$d->hi();
?>