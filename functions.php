<?php
include "header.php";
echo " <h1>Functions</h1>
    <h2>Basic Functions</h2>";
//    Declaring the function 
function add($a, $b, $c)
{
    $total = $a + $b + $c;
    echo $total . "<br>";
}

add(1, 10, 9);
add(5, 3, 9);
add(50, 300, 9);
echo "<h2> Function with shapes</h2>";

function v_sphere($radius)
{
    $pi = 22 / 7;
    $sphere = 4 / 3 * ($pi * $radius * $radius * $radius);
    return $sphere;
}

$volume = v_sphere(10);
echo "The Volume Of a Sphere is <em>" . round($volume, 2) . "</em><br>";

function areasemicircle($radius)
{
    $pi = 22 / 7;
    $semicircle = ($pi * $radius * $radius) / 2;
    echo "The area of a semicircle with radius  $radius cm is <em>" . round($semicircle, 2) . "</em><br>";
}

areasemicircle(10);

echo "<h2> Global Variables</h2>";
// //  Declare the variable 
global $name;
// Assign the variable 
$name = "Brian";

function printname()
{
    global $name;
    echo $name . "<br>";
}
printname();

echo "<h2> Static Variables</h2>";
function counter()
{
    static $name = 1;
    echo $name . "<br>";
    $name = $name + 1;
}
//  here name is 1
counter();
//  here name is 2
counter();
//    here name is 3 
counter();
counter();
counter();

echo "<h2> SUPER global Variables</h2>";
// //  Declare the variable 
global $message;
// Assign the variable 
$message = "Brian is teaching Creative ICS3";
function print_message()
{
    echo  $GLOBALS['message'];
}

print_message();

echo "<h2> Variables Of Variables</h2>";

$male = "T, Brian";
$gender = "male";

echo $gender . "<br>";
echo $$gender . "<br>";


echo "<h2> Predifined Variables</h2>";
@$value = 10 / 0;
print_r(error_get_last());

function sum($a, $b): int
{
    $ans = $a + $b;
    return $ans;
}

echo "<br>Result " . sum(10, 20) . "<br>";

function even_array($limit): array
{
    $even_arr = [];
    for ($i = 0; $i < $limit; $i++) {
        if ($i % 2 == 0) {
            $even_arr[] = $i;
        }
    }
    return $even_arr;
}

var_dump(even_array(10));

$divider = function ($a, $b){
    $divide = $a / $b;
    // echo "<br>This is a function";
    return $divide;
};
$answers = $divider(10, 2);

echo "<br>Result " . $answers . "<br>";

$message = "Hello World";
$display = function () use ($message) {
    echo $message . "<br>";
};

$display();

// date_default_timezone_set('Africa/Douala');
$date = date('Y-m-d H:i:s A');
$date2 = date('l jS \of F Y');

$date = new DateTime('now', new DateTimeZone('Pacific/Nauru'));
echo "<h2>Nauru: ".$date->format('Y-m-d H:i A') . "</h2>";

    

$chita =$date->setTimezone(new DateTimeZone('Asia/Chita'));
echo "<h2>Chita: ". $date->format('Y-m-d H:i A') . "</h2>";

$dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata')); 
echo "<h2>Kolkota:".$dateTime->format("Y-m-d H:i A")."</h2>"; 




// $datepacific = date_create($date, timezone_open('Pacific/Nauru'));
// echo date_format($datepacific, 'H:i:s a') . "\n";

// $datelagos = date_create($date, timezone_open('Europe/London'));
// echo date_format($datelagos, 'H:i:s a') . "\n";
// echo "The date of today is : $date2";

 
$result = 0;
function sum3 ($a, $b,$c,&$answer){
    $answer = $a + $b+$c;
    // echo "<br>This is a function";
    return $answer;
};

sum3(1,3,7,$result);

echo "<br>Result " . $result . "<br>";


include "footer.php";
?>