<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     define ("PI",22/7);
    echo __DIR__;
echo "<h1>Exercise 1:Create And Display Variables</h1>";
$name="birdmann";
$class="from1";
$gender="male";

echo "my name is $name,my class is $class and my gender is $gender";

echo"<br><h2> semicirle</h2>";

       $radius=5;
       $area=(PI*$radius*$radius)/2;
       echo" the area of a semicirle with radius $radius in cm is <em>" .round($area,2) ."</em> <br>";

       echo "<br> <h2>next example</h2>";
       function perimeter_semicircle($radius){
        // $radius=5;
        $perimeter =PI*$radius;
        echo" the perimeter of a semicirle with radius $radius in cm is <em>" .round($area,2) ."</em> <br>";

       }
       perimeter_semicircle(5);

?>
</body>
</html>