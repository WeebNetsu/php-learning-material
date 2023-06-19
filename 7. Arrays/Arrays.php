<?php
// 2 ways to create an array
$names = array('David', 'Louis', "Gerald");
$age = [12, 47, 20];

// access indexes in an array
echo $names[1];
echo "<br>$names[2] is $age[2] years old";

// change a value in the array
$names[2] = "Jack";
// add to the end of the array
$names[] = "Mike";

count($names); // length of array
// printing out an array
print_r($names);

// associative arrays - allows you to assign keys to your values
$people['David'] = 27;
$people['Amy'] = 21;
$people['John'] = 42;

echo $people['David']; // 27

// the above code can also be done like this:
$people = array(
    "David" => 27,
    "Amy" => 21,
    "John" => 42
);

echo $people['John']; //42
print_r($people); // shows everything in array

// Another good example
$associativeArray = array(
    'user' => "Netsu",
    "age" => 24,
    "power_level" => 9001,
    "gender" => "male"
);

echo $associativeArray["user"]; // John

// multi dimensional arrays
$people = array(
    "online" => array("David", "Amy"),
    "offline" => array("John", "Rob", "Jack"),
    "away" => array("Daniel", "Jason")
);

echo $people["online"][0]; //David
?>