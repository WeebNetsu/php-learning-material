<?php
	error_reporting(E_ALL); ini_set('display_errors', '1');

	class Person
	{
		protected $first_name = "Daniel"; //can be used in classes extending this one
		private $last_name = "Neilson";
		private $age = 28; //private can only be used inside the class

		public function getAge(){
			$a = $this->age . "<br>"; //reference to a private variable

			return $a;
		}
	}

	class Pet extends Person //inherits from class Person
	{
		public function owner(){ //public can be used anywhere
			$a = $this->first_name; //can use variable since it is protected

			return $a;			
		}		
	}

	$owner01 = new Person();
	echo $owner01->getAge();

	$pet01 = new Pet();
	echo $pet01->owner();
?>