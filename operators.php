<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <?php
    echo "<h1> Conditional Operator</h1>";
    echo "<h2> Ternary Operators</h2>";
    $logged_in=true;
    $display = $logged_in ? 'Logged In Welcome User' : 'Noone is Logged In';
    echo $display;

    echo "<h2> Logical Operators</h2>";
    $logged_in=true;
    $permission = true;
    $name = 'Zola';
    echo ($logged_in and $permission) ? "Logged In Welcome $name" : ' Welcome Guest';
    echo "<br><h3> Using < and ></h3>";
    $x = 8;
    echo ($x <= 7)? "True $x is less than 7" : "False $x is not less";

    echo "<br><h3> Using ! </h3>";
    $x = 700;
    echo ($x != 7)? "$x is not equal to 7" : "False $x is 7";

    echo "<h2> Assignment Operators</h2>";
    echo "<h3>Add Assignment Operators</h3>";
    $count = 1;
    echo $count.'<br>';//1
    $count++;//Incrementing $count
    echo $count.'<br>';//2
    $count += $count;
    echo $count.'<br>';//4

    $name = "Zola";
    echo $name.'<br>';
    $name .= " is a student";
    echo $name.'<br>';
    $name .= " Of Creative ICS 3";
    echo $name.'<br>';  
    
    echo "<h3>Subtract Assignment Operators</h3>";
    $count = 10;
    echo $count.'<br>';//10
    $count--;//Decrementing $count
    echo $count.'<br>';//9
    $count -= 6;
    echo $count.'<br>';//3

    echo "<h3>Exercise</h3>";
    $english = 19;
    $french = 9;
    $state = ($english < 10) && ($french < 10);
    echo $state;
    echo ($state)? "Student Failed": "Student Passed";





    ?>
</body>
</html>