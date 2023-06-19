<?php
    //NOTE: you actually need a database connection and stuff for this to work
    // To make sure user input doesn't get transformed into SQL code, then we need to use this
    // function to escape it:

    $username = mysqli_real_escape_string($con, $_POST['username']);

    //the above code will make sure the input is escaped, so select * from tblExample; would become invalid
?>