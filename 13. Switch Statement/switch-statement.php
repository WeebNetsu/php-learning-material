<?php
$today = "Tue";

/*The switch statement below is a replacement for this:
       if($today === "Mon"){
           echo "Today is Monday";
       }else if($today === "Tue"){
           echo "Today is Tuesday";
       }
       ...
       else{
           echo "Invalid day";
       }
   */

switch ($today) {
    case 'Mon':
        echo "Today is Monday";
        break; //exit

    case 'Tue':
        echo "Today is Tuesday";
        break;

    case 'Wed':
        echo "Today is Wednesday";
        break;

    case 'Thu':
        echo "Today is Thursday";
        break;

    case 'Fri':
        echo "Today is Friday";
        break;

    case 'Sat':
        echo "Today is Saturday";
        break;

    case 'Sun':
        echo "Today is Sunday";
        break;

    default: //else
        echo "Invalid day";
        break;
}

switch ($today) {
    case 'Mon':
        echo "First day of the week";
        break; //exit

    // if(this || this || this){}
    case 'Tue':
    case 'Wed':
    case 'Thu':
        echo "<br/> Working day";
        break;

    case 'Fri':
        echo "Today is Friday!!";
        break;

    default: //else
        echo "Weekend";
        break;
}

// Note without a break, it will print all the outputs
?>