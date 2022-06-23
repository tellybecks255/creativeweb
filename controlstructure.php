
    <?php
    include "header.php";
    echo "<hi> control structure</h1>";
    echo "<h2> two condition structures</h2>";
    $x = 3;
    if ($x < 5) {
        echo $x + 5;
    } else {
        echo $x - 5;
    }
    echo "<h2> Two condition Display HTML Structure</h2>";
    $username = "Birdmann";
    $is_logged = true;
    if ($is_logged == true && isset($username)) {
        echo "<h1> Welcome $username</h1>";
    } else {
        echo "<h1> Welcome User</h1>";
    }

    echo "<h2> Three condition structures</h2>";
    $x = 5;
    if ($x < 5) {
        echo $x + 5;
    } else if ($x == 5) {
        echo "$x";
    } else {
        echo $x - 5;
    }

    echo "<h2> Switch Statements</h2>";
    $y = 10;
    switch ($y) {
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
    echo "<h2> For Loops</h2>";
    for ($i=0; $i <=7; $i=$i+3){ 
        echo "$i is the number i see now<br>";
    }
    for($d=10; $d>1; $d--){
        echo"$d is the number i see now<br>";
    }
    echo "<h2> While Loops</h2>";
    $w=1;
    while($w<10){
        $w++;
        echo "$w is the number i see now<br>";
    }
    echo "<h2>Do While Loops</h2>";
    $length =10;
    $width =2;
    do{
        echo"the area of a rentangle with dimensions $length cm and $width cm is ".$length*$width." cm2 <br>";
        $width++;
    }while($width != $length);

    echo"<h2> Break Statement And Nested Loop</h2>";
    for ($count=0; $count < 10; $count++){
        if($count == 7){
            break;
        }
        echo"The number i see now is $count<br>";
    }
    echo "<h3> Nested Loops</h3";
    $day=1;
    $subjects=9;
    $mark=100;

    for (; $day < 15; $day++){
        echo "it is day $day<br>";
        while($subjects >= 5){
            if($subjects == 5){
                echo "You Have Failed <br>";
                break;
            }
            else{  
            do{
                if ($mark ==70){
                    echo"You have a B Grade with $mark <br>";
                     break;
                }else{
                echo "not good enough with $mark <br>";
            }
             $mark-=10;
            }while ($mark >=50);
        }
        $subjects--;
       }

    }

    echo" Continue<br>";
    $value= 1;
    while(true){

         $result = $value %2;

        if($result == 1){
            $value++;
            continue;
        }
        if($value > 10){
            break;
        }

        echo 'Even Number:'. $value .
        $value++;
    }

    echo"<h3> Return</h3>";
    function v_sphere($radius)
    {
        $pi=22/7;
    $sphere =4/3*($pi*$radius*$radius*$radius);
    return $sphere;
 }
 $volume =v_sphere(10);
 echo "The Volume of a sphere is <em>" .round($volume,2).
 include "footer.php";
    ?>
