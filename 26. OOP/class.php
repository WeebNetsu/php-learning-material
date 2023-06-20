<?php
class Person
{ //person object
    public $age; //public - can be accessed from anywhere in the code
    public function speak()
    {
        echo "Hello!<br>";
    }
    public function getAge()
    {
        echo $this->age; //basically this.age
    }
}

$lenny = new Person; //create an instance
$lenny->speak(); //basically lenny.speak(); (if using JS/Java)
$lenny->age = 17;
$lenny->getAge();
var_dump($object); //displays an object and its properties

// ----- INHERITANCE -----

class Animal
{
    public $name = "Jerrold";

    public function hi()
    {
        echo "Hi from Animal";
    }

    final function noOwerrite()
    {
        echo "This function cannot be overriten";
    }
}

//class Dog inherits all methods from Animal
class Dog extends Animal
{
    // The blow code will give an error because it is trying to overrite 
    // a final function
    /*function noOwerrite(){
        echo "Overrite";
    }*/
}

$d = new Dog();
$d->hi();

// ----- Constructor and destructor -----

class Human
{
    public $name;
    public $age;
    public function __construct($name, $age)
    { //constructor
        $this->name = $name;
        $this->age = $age;

        echo "<p>Object $name which is $age was created!</p>";
    }

    //the below code only runs when the entire PHP script ended
    public function __destruct()
    { //destructor (destroys object automatically)
        echo "<p>Object was destroyed!</p>";
    }
}

$p = new Human("Tom", 24);

echo $p->age; // can't be accessed, since object was destroyed
unset($p); // destroy an object
echo $p->age; // can't be accessed, since object was destroyed

// ----- INTERFACES -----

// is used to declare methods before they're used - useful if multiple classes should
// have the same functions
interface AnimalInterface
{
    public function makeSound(); //declares an method
}

interface HumanInterface
{
    public function treatPet();
}

//you can implements more than 1 interface at a time
class Child implements AnimalInterface, HumanInterface
{
    function makeSound()
    {
        echo "Waaah!<br>";
    }

    function treatPet()
    {
        echo "Come here, boy<br>";
    }
}

$myObject = new Dog();
$myObject->makeSound();
$myObject->treatPet();

// ----- Visibility -----
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Friend
{
    protected $first_name = "Daniel"; //can be used in classes extending this one
    private $last_name = "Neilson";
    private $age = 28; //private can only be used inside the class

    public function getAge()
    {
        $a = $this->age . "<br>"; //reference to a private variable

        return $a;
    }
}

class Pet extends Friend //inherits from class Friend
{
    public function owner()
    { //public can be used anywhere
        $a = $this->first_name; //can use variable since it is protected

        return $a;
    }
}

$owner01 = new Friend();
echo $owner01->getAge();

$pet01 = new Pet();
echo $pet01->owner();
?>