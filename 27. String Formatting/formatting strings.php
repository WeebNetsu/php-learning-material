<!DOCTYPE html>
<html>

<head>
    <title>Type Specifier</title>
</head>

<body>
    <?php
    //every %d is a number, for every %d you have to add another parameter
    //M_PI = Math.PI()
    //printf formats numbers
    printf("Pi rounded to a whole number is: %d", M_PI);
    echo "<br>";
    printf("Here is another %d numbers: %d and %d", 2, 2 * 4, 10 / 4);
    ?>

    <br>
    <br>

    <style type="text/css">
        td,
        th {
            border: 1px solid black;
            margin: 0;
        }

        td {
            padding: 4px;
            text-align: center;
        }
    </style>

    <table>
        <tr>
            <th>Specifier</th>
            <th>Usecase</th>
            <th>Example</th>
        </tr>

        <tr>
            <td>%b</td>
            <td>Turns a number value into its <b>binary</b> value</td>
            <td>
                <?php printf("Here is %b for you", 90) ?>
            </td>
        </tr>

        <tr>
            <td>%c</td>
            <td>Turns a aschii value into its normal character</td>
            <td>
                <?php printf("Here is %c for you", 100) ?>
            </td>
        </tr>

        <tr>
            <td>%d</td>
            <td>Rounds a number to the nearest integer</td>
            <td>
                <?php printf("Here is %d for you", 9.7) ?>
            </td>
        </tr>

        <tr>
            <td>%e</td>
            <td>Turns a number into its scientific notation</td>
            <td>
                <?php printf("Here is %e for you", 187.765) ?>
            </td>
        </tr>

        <tr>
            <td>%f</td>
            <td>Returns a floating point number (uses local setting ["." or ","])</td>
            <td>
                <?php printf("Here is %f for you", 10 / 3) ?>
            </td>
        </tr>

        <tr>
            <td>%F</td>
            <td>Returns a floating point number (ignores local settings)</td>
            <td>
                <?php printf("Here is %F for you", 10 / 3) ?>
            </td>
        </tr>

        <tr>
            <td>%o</td>
            <td>Turns a number into an octal number</td>
            <td>
                <?php printf("Here is %o for you", 19) ?>
            </td>
        </tr>

        <tr>
            <td>%s</td>
            <td>Turns a value into a string</td>
            <td>
                <?php printf("Here is %s for you", true) ?>
            </td>
        </tr>

        <tr>
            <td>%u</td>
            <td>Treats input as integer and returns a decimal value</td>
            <td>
                <?php printf("Here is %u for you", 99.99) ?>
            </td>
        </tr>

        <tr>
            <td>%x</td>
            <td>Turns a number into an lowercase hexadecimal number</td>
            <td>
                <?php printf("Here is %x for you", 123) ?>
            </td>
        </tr>

        <tr>
            <td>%X</td>
            <td>Turns a number into an uppercase hexadecimal number</td>
            <td>
                <?php printf("Here is %X for you", 255) ?>
            </td>
        </tr>

        <tr>
            <td>%+d</td>
            <td>Tells you if a number is positive or negative</td>
            <td>
                <?php printf("Here is %+d (22) for you and a %+d (-19)", 22, -19) ?>
            </td>
        </tr>

        <tr>
            <td>%0[num]d</td>
            <td>Tabs the number using 0 so they are all on the same tab<br>(in this case 10)</td>
            <td>
                <?php
                printf("%010d<br>", 12345);
                printf("%010d<br>", 123);
                printf("%010d", 1234567891);
                ?>
            </td>
        </tr>

        <tr>
            <td>%[num]s</td>
            <td>Tabs the text using spaces so they are all on the same tab<br>(in this case 10)<br><i>Note: You have to
                    use <q>&lt;pre&gt;</q> to use it</i></td>
            <td>
                <?php
                print("<pre>");
                printf("%10s\n", "Hi");
                printf("%10s\n", "Hello");
                printf("%10s", "Hello, you");
                print("</pre>");
                ?>
            </td>
        </tr>

        <tr>
            <td>%'[char][num]d</td>
            <td>Tabs the number using any character so they are all<br>on the same tab (in this case 10)</td>
            <td>
                <?php
                printf("%'#10d<br>", 12345);
                printf("%'$10d<br>", 123);
                ?>
            </td>
        </tr>

        <tr>
            <td>%[char]-[num]d</td>
            <td>Tabs (to the <b>right</b>) the number using 0 so they are all<br>on the same tab (in this case 10)</td>
            <td>
                <?php
                printf("%'#-10d<br>", 12345);
                ?>
            </td>
        </tr>

        <tr>
            <td>%f</td>
            <td>Specifies the persision of numbers (default: 6 places after decimal)</td>
            <td>
                <?php
                printf("%f<br>", M_PI);
                printf("%.2f<br>", M_PI);
                printf("%.0f<br>", M_PI);
                printf("%05.1f<br>", M_PI);
                ?>
            </td>
        </tr>

        <tr>
            <td>%%</td>
            <td>Displays a %</td>
            <td>
                <?php printf("Here is %% for you") ?>
            </td>
        </tr>
    </table>

    <?php
    // ! NOTE SKIP FOR VIDEO TUTORIAL
    $mailbox = "Inbox";
    $totalMessages = 36;
    $unreadMessages = 3;

    //you can read stuff from text files and format it as well
    //you can also (as seen in temp.txt) change the order in which all of the
    //inputs goes by using %[parameter]$%[action]
    printf(file_get_contents("temp.txt"), $totalMessages, $mailbox, $unreadMessages);
    ?>
</body>

</html>