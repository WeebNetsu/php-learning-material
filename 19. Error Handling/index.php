<!DOCTYPE html>
<html>

<head>
    <title>Exceptions</title>
</head>

<body>

    <?php
    try {
        // error handling can help you keep your website from 
        // crashing if it runs into an error
        $throwError = false;

        echo "Hello";

        if ($throwError) {
            // in this case we are forcing an error to be thrown
            throw new Exception("Error Processing Request", 1);
        }

        echo "I am here";
    } catch (Exception $e) {
        // if an exception was raised (error was thrown), then we can display it
        // as such
        echo $e->getMessage();
    }

    function divide($num, $den)
    {
        if ($den === 0) {
            throw new InvalidArgumentException("Division by zero is not allowed.");
        }

        return $num / $den;
    }

    try {
        $throwError = false;

        if ($throwError) {
            divide(10, 0);
        }
    } catch (InvalidArgumentException $e) {
        // this will catch a specific type of error
        echo $e->getMessage();
    } catch (Exception $e) {
        // this will catch any type of error
        echo $e->getMessage();
    }
    ?>

</body>

</html>