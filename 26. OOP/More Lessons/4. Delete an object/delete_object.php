<?php
	class Person
	{
		private $name, $age;
		function __construct($name, $age)
		{
			echo "Object created<br>";
			$this->name = $name;
			$this->age = $age;
		}

		function getName()
		{
			return $this->name;
		}

		function setName($newName){
			$this->name = $newName;
		}

		function __destruct()
		{
			echo "<br>Object has now been destructed";
		}
	}

	$jackson = new Person("Jackson", 24);
	echo $jackson->getName();
	$jackson->setName("Lucy");
	echo "<br>";
	echo $jackson->getName();
	unset($jackson); //destroys object
	echo $jackson->getName();
?>