<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>define strings And Integers</h1>
    <?php
    define ("PI",22/7);
       $name= "UB Girls";
       $address= "dirty south";
       $class=" la Cave";
 
       echo"my name is ".$name."<br>i live in ".$address." <br> am in ".$class;
       echo"<br> hello i stay in $address my name is $name and i am in $class.";

       echo"<br><H1> Adding Three Variables A,B,C </h1>";
    
       $A=1;
       $B=2;
       $C=3;
       $add=$A+$B+$C;
       echo "the sum is $add";

       echo"<br><H1> subtracting Three Variables A,B,C </h1>";

       $subtract=$A-$B-$C;
       echo "the difference is $subtract";

       echo"<br><H1> multiply Three Variables A,B,C </h1>";

       $multiply=$A*$B*$C;
       echo "the multiple is $multiply";

       echo "<br> <h1>Mathematical calculations</h1>";
       echo "<br> <h2>CurrencybExchange USD to XAF </h2>";

       $USD= 3;
       $XAF= 0;
       $Rate= 598;
       $XAF=$Rate*$USD;
       echo "$USD DOLLARS is equivalent to $XAF FCFA";

       echo "<br> <h2>CurrencybExchange XAF to USD </h2>";

       $USD= 0;
       $XAF= 10000;
       $Rate= 598;
       $USD=$XAF/$Rate;
       echo "$XAF FCFA is equivalent to". round($USD,2)."<br>";

       echo"<h1>Mathematics of shape(calculating volumn,area and perimeter)</h1>";
       echo"<br> <h2> square</h2>";
        
       $side=8;
       $area=$side*$side;
       $perimeter=$side*4;
       echo "the area of a square with side $side is $area cm2 and the perimeter is $perimeter </br>";

       echo"<br><h2> rentangle</h2>";

       $length=6;
       $width=4;
       $area=$length*$width;
       $perimeter=2*($length*$width);
       echo"the area of a rentangle is $length is width $width <br> area is $area and the perimeter is $perimeter </br>";

       echo"<br><h2> triangle</h2>";

       $base=4;
       $height=8;
       $area=1/2*($base*$height);
       $a=2;
       $b=4;
       $c=6;
       $perimeter=$a+$b+$c;
       echo "the area of a triangle with base is $base and height is $height <br> the area is $area and perimeter is $perimeter</br>";

       echo"<br><h2> circle</h2>";

       PI;
       $radius=8*8;
       $area=PI*$radius*$radius;
       $perimeter=2*22/7*$radius;
       echo "the area of a circle pi is PI and radius is $radius <br> the area is $area and perimeter is $perimeter</br>";

       echo"<br><h2> sphere</h2>";

       PI;
       $radius=6;
       $area=4/3*(PI*$radius*$radius*$radius);
       echo" the volumn of a sphere with radius $radius in cm is <em>" .round($area,2)."</em> <br>";

       echo"<br><h2> cylinder</h2>";

       PI;
       $height=6;
       $radius=4;
       $area=PI*$radius*$radius*$height;
       echo"the volumn of a cylinder with radius $radius and height $height in cm is <em>" .round($area,2) ."</em> <br>";
       
       echo"<br><h2> cube</h2>";

       $side=8;
       $area=$side*$side*$side;
       echo" the volumn of a cube with side $side in cm is <em> $area </em> <br>";

       echo"<br><h2> semicirle</h2>";

       PI;
       $radius=5;
       $area=PI*($radius*$radius)/2;
       echo" the area of a semicirle with radius $radius in cm is <em>" .round($area,2) ."</em> <br>";








?>


</body>
</html>