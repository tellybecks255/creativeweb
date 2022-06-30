<?php

include_once "header.php";

    echo "<h1> Control Structures</h1>";
    echo "<h2>Two Condition Structures</h2>";
    $x=7;
    if($x<5){
        echo $x+5;
    }
    else{
        echo $x-5;
    }
    echo "<h2>Two Condition Display HTML Structures</h2>";
    $username;
    $is_logged = true;
    if($is_logged == true && isset($username)){
        echo "<H1> Welcome $username</H1>";
    }
    else{
        echo "<H1> Welcome User</H1>";
    }

    echo "<h2> Switch Statements </h2>";
    $y = 10;
    switch($y){
        case 10:
            echo "Number is 10";
            break;
        case 20:
            echo "Number is 20";
            break;
        case 30:
            echo "Number is 30";
            break;
        default:
            echo "Number does not exist in our range";
            break;
    }
    echo "<h3> GoTo </h3>";
    $result=10  ;
    if ($result == 10){
        goto result_block;
    }
    else{
        exit('This is the end');
    }
    result_block:
     echo "This is the output of the result".PHP_EOL;

    echo "<h2>For Loops</h2>";
    for ($i=0; $i <= 7; $i=$i+3) { 
      echo "$i is the number i see now<br>";
    }
    for($d=10; $d>1; $d--){
        echo "$d is the number i see now<br>";   
    }

    echo "<h2>While Loops</h2>";
    $w = 1;
    while($w<10){
        $w++;
        echo "$w is the number i see now<br>";
    }

    echo "<h2>Do While Loops</h2>";
    $length = 10;
    $width = 2;
    do{
        echo "the Area of a rectangle with dimensions $length cm and $width cm is ".$length*$width." cm2 <br>";
        $width++;
    }while($width != $length);
    
    echo "<h2>Break Statements and Nested Loops</h2>";
    echo "<h3>Breaks</h3>";
    for ($count=0; $count < 10; $count++) { 
        if($count == 7){
            break;
        }
        echo "The number i See now is $count <br>";
    }

    echo "<h3>Nested Loops</h3>";
    $day=1;
    $subjects = 9;
    $mark = 100;

    for (; $day < 15; $day++) { 
    echo "it is day $day<br>";
       while ($subjects >= 5) {
         if($subjects == 5){
            echo "You Have failed <br>";
            break; 
         }
         else{
            do {
                if ($mark ==70) {
                  echo "You Have a B grade with $mark <br>";
                  break;
                } else {
                   echo "Not Good enough with $mark<br>";
                }
                
                $mark-=10;
              } while ($mark >= 50);
         }
        $subjects--;
       }
    }
    echo "<h3>Continue</h3>";
    // To test if a number is even 
    $value = 1;
    while(true){
        $result = $value%2;

        if($result == 1){
            $value++;
            continue;
        }

        if($value >10){
            break;
        }
        echo "Even Numbers: $value".PHP_EOL;
        $value++;
    }

    echo "<h3> Return  </h3>";
    function v_sphere($radius)
    {
        $pi = 22 / 7;
        $sphere = 4/3*($pi * $radius * $radius*$radius) ;
       return $sphere;
    }

    $volume = v_sphere(10);
    echo "The Volume Of a Sphere is <em>" . round($volume, 2) . "</em><br>";

    
    
    include_once "footer.php";
    ?>
