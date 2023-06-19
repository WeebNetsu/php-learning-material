<?php
// while loop - loops while the value in () is true
$i = 0;
while ($i <= 10) {
    echo "The value is $i <br>";
    $i++;
}

// do while - same as a while loop, but will always run at least once
do {
    echo "Hello World!";
} while (1 > 2);

// for loop
for ($i = 0; $i <= 10; $i++) {
    echo "This is nr $i <br>";
}

// using a continue or break inside a loop
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue; // this will skip all the even numbers
    }

    if ($i === 5) {
        // will stop the loop from running
        break;
    }

    echo "$i <br>";
}

// for each loop
$names = ["Amy", "John", "Lucah"];

foreach ($names as $name) { //select all values from $names and = them to $name
    echo "$name is here <br>"; // print the stored value in $name
}
?>