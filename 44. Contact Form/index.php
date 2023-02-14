<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>

<body>
    <main>
        <h1>Send Email</h1>

        <form method="post" action="contactform.php">
            <input type="text" name="name" placeholder="Jack Smith">
            <input type="email" name="email" placeholder="jacksmith@gmail.com">
            <input type="text" name="subject" placeholder="The reason I'm sending this is...">
            <textarea name="content" cols="30" rows="10"></textarea>

            <button type="submit" name="submit">Send</button>
        </form>
    </main>
</body>

</html>