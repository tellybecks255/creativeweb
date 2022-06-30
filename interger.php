<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interger Test</title>
</head>

<body>
    <h1>Displaying Strings and Integers</h1>
    <?php
    define("PI",22/7);
    const MAX = 20;

    $name = "Pryde";
    $address = "Molyko";
    $class = "Level 600";
    echo "My Name is " . $name . "<br> I live in  " . $address . "<br> I am in " . $class;
    echo "<br>Hello I stay in $address, My name is $name, and i am in $class. ";

    echo  " <hr> <h1>Arithemtic with Three Variables A, B, C </h1>";
    echo  "  <h2>1. Addition </h2>";
    $a = 1;
    $b = 2;
    $c = 3;
    $add = $a + $b + $c;
    echo "The sum is $add <br>";
    echo  "  <h2>2. Subtraction </h2>";
    $subtract = $a - $b - $c;
    echo "The  Diffrence is $subtract ";
    echo  "<h2>3. Multiplication </h2>";
    $product = $a * $b * $c;
    echo "The  Product is $product <br>";
    $modulo = $c % $b;
    echo "$c modulo $b is $modulo";

    echo  " <h1>Mathematical Calculations </h1>";
    echo  "<h2>Currency Exchange USD to XAF </h2>";

    $usd = 200;
    $xaf = 0;
    $rate = 598;
    $xaf = $usd * $rate;
    echo " $$usd is equivalent to $xaf FCFA <br>";

    echo  "<h2>Currency Exchange XAF to USD</h2>";
    $usd = 0;
    $xaf = 900000;
    $rate = 598;
    $usd = $xaf /  $rate;
    echo " $xaf FCFA   is equivalent to". round($usd,2)."<br>";

    echo  " <h1>Mathematics of Shapes (Area, Volume, Perimeter)</h1>";
    echo  "<h2>1. Square</h2>";
    $side = 8;
    $sarea = $side*$side;
    $sperimeter = $side*4;
    echo  "The Area Of a Square with length $side cm is <em> $sarea cm2</em><br>
           The Perimeter is <em>$sperimeter cm</em>";

    echo  "<h2>2.Rectanbgle</h2>";
    $length = 8;
    $width = 5;
    $rarea = $length*$width;
    $rperimeter = 2*($length + $width);
    echo  "The Area Of a Rectangle with length $length cm and width $width cm is <em> $rarea cm2</em><br>
           The Perimeter is <em>$rperimeter cm</em>";

    echo  "<h2>3. Triangle</h2>";
    $base = 8;
    $height = 5;
    $a=4; $b=5; $c=3;
    $tarea = 1/2 * ($base*$height);
    $tperimeter = $a=$b+$c;
    echo  "The Area Of a Triangle with base $base cm and height $height cm is <em> $tarea cm2</em><br>
           The Perimeter of a triangle with sides $a,$b,$c in cm is <em>$tperimeter cm</em>";


    echo  "<h2>4. Semicircle</h2>";
    $radius = 5;
    $semicircle = ( PI *$radius*$radius)/2;
    echo "The Area Semicircle with radius  $radius cm is <em>".round($semicircle,2)."</em><br>";

    echo  "<h2>5. Circle</h2>";
    $radius = 111;
    $circle = ( PI * $radius*$radius);
    echo "The Area circle with radius  $radius cm is <em>".round($circle,2)."</em><br>";


    echo  "<h2>6. Cube</h2>";
    echo"Two Raised to the pwer six is : ". pow(2,6);

    echo  "<h2>7. Cylinder</h2>";


    echo  "<h2>8. Sphere</h2>";
    $radius = 5;
    
    $sphere = (4/3)*PI*$radius*$radius*$radius;
    echo "The Volume Of a Sphere with radius  $radius cm is <em>".round($sphere,2)."</em><br>";

    
    ?>


</body>

</html>