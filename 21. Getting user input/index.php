<!DOCTYPE html>
<html>

<head>
    <title>User Input</title>
</head>

<body>
    <!-- 
        action: sends the user to the specified page after completing the form
        method: get or post (more info in index.php)
        name: this is used to send information over to the next page, see it as a "variable" name="email" will store the email value. The example below stores the text inside the input inside the "name" variable
     -->
    <form method="get" action="index.php">
        <label>Name: </label>
        <input type="text" name="name" required>
        <br>
        <label>Age: </label>
        <input type="number" name="age" required value="20" min="10" max="100">
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    /*
        GET: not private, details is shown in link, but the page can be visited again in the future
        POST: Private, no details in link, page cannot be visited again in the future

        $_GET['name'] 
        $_POST['email']
    */
    $name = $_GET["name"];
    $age = $_GET["age"];

    if ($name != false) {
        echo "<p>Hello $name! You are $age years old!</p>";
    }
    ?>


    <!-- PART 2 - checkboxes -->
    <!-- when you don't specify the action, it will automatically call POST or GET to the page the form is defined on -->
    <form method="post">
        <!-- When you want input from checkbox with an array, make the name an array -->
        <input type="checkbox" name="fruits[]" value="apples">Apples<br>
        <input type="checkbox" name="fruits[]" value="bananas">Bananas<br>
        <input type="checkbox" name="fruits[]" value="pears">Pears<br>
        <input type="submit">
    </form>

    <?php
    $fruits = $_POST["fruits"]; //array created since name was "fruits[]"
    
    for ($i = 0; $i < count($fruits); $i++) {
        echo "$fruits[$i]<br>";
    }
    ?>
</body>

</html>