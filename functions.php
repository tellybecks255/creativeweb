 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <h1>Functions</h1>
     <h2>basic functions</h2>
     <?php
      /// declaring the function
      function add() {
          $a=12;
          $b=6;
          $c=4;
          $total=$a+$b+$c;
          echo  "$total"."<br>";

      }
      add ();
      function sub($a,$b,$c) {
          $total=$a-$b-$c;
          echo $total."<br>";
          
 }
 sub (23, 76, 32);
 sub(12,21,67);
     
   echo"<br> <h1>Testing Functions Myself Hahahahaha</h1>";

     function addition($a,$b,$c){
         $total=$a+$b+$c;
         echo $total."<br>";
     }
    
         addition(2,4,6);

         add();
         function subract($a,$b,$c){
            $total=$a-$b-$c;
            echo $total."<br>";

         }
         subract(24,6,3);

         add();
         function multiple($a,$b,$c){
             $total=$a*$b*$c;
             echo $total."<br>";

         }
         multiple(2,20,4);  
     
        add();
        function divide($a,$b,$c){
            $total=$a/$b/$c;
            echo $total ."<br>";
        }
        divide(16,4,2);


      echo"<br> <h1>Testing Functions Myself With Mathematics of shape Hahahahaha</h1>";

      echo"<br><h2> semicirle</h2>";

      $pi=22/7;
      $radius=5;
      $area=$pi*($radius*$radius)/2;
      echo" the area of a semicirle with radius $radius in cm is <em>" .round($area,2) ."</em> <br>";

      echo"<br><h2> cube</h2>";

       $side=8;
       $area=$side*$side*$side;
       echo" the volumn of a cube with side $side in cm is <em> $area </em> <br>";
       
       echo"<br><h2> cylinder</h2>";

       $pi=22/7;
       $height=6;
       $radius=4;
       $area=$pi*$radius*$radius*$height;
       echo"the volumn of a cylinder with radius $radius and height $height in cm is <em>" .round($area,2) ."</em> <br>";
      
       echo"<br><h2> sphere</h2>";

       $pi=22/7;
       $radius=6;
       $area=4/3*($pi*$radius*$radius*$radius);
       echo" the volumn of a sphere with radius $radius in cm is <em>" .round($area,2)."</em> <br>";
       
       echo"<br><h2> circle</h2>";

       $pi=22/7;
       $radius=8*8;
       $area=$pi*$radius*$radius;
       $perimeter=2*22/7*$radius;
       echo "the area of a circle pi is $pi and radius is $radius <br> the area is $area and perimeter is $perimeter</br>";

       echo"<br><h2> triangle</h2>";

       $base=4;
       $height=8;
       $area=1/2*($base*$height);
       $a=2;
       $b=4;
       $c=6;
       $perimeter=$a+$b+$c;
       echo "the area of a triangle with base is $base and height is $height <br> the area is $area and perimeter is $perimeter</br>";

       echo"<br><h2> rentangle</h2>";

       $length=6;
       $width=4;
       $area=$length*$width;
       $perimeter=2*($length*$width);
       echo"the area of a rentangle is $length is width $width <br> area is $area and the perimeter is $perimeter </br>";

       echo"<br> <h2> square</h2>";
        
       $side=8;
       $area=$side*$side;
       $perimeter=$side*4;
       echo "the area of a square with side $side is $area cm2 and the perimeter is $perimeter </br>";

        echo"<h2> Global Variables</h2>";

      function printname(){
          global $name;"birdmann";
           echo "name"."<br>";

       }
       printname();
       echo"name";

       echo"<h2> static variables</h2>";



       function counter(){
          static $name=1;
           echo $name."<br>";
           $name=$name+1;
       }



       //here name is 1
       counter();
       //here name is 2
       counter();
       //here name is 3
       counter();
       counter();
       counter();
     
       

       echo"<h2> SUPER global variables</h2>";
       //declare the variables
       global $name;
       //Assign the variable
       $message= "Brain is teaching Creative ICS";
     function print_message(){
           echo $GLOBALS {'Mesaage'};

       }
       print_message();

       echo"<h2> Variables of Variables</h2>";

       $male= "T,smith";
       $gender="male";

       echo $gender."<br>";
       echo $gender."<br>";

       echo"<h2> Return Value Functions</h2>";

       function sum($a,$b): int
       {
           $ans=$a+$b;
           return $ans;
       }
       
       echo"<br>Result".sum(10,20);

       function even_array($limit):array{
           $even_arr=[];
           for ($i=0; $i < $limit; $i++) {
               if($i%2==0){
                   $even_arr[]=$i;
               }
           }
           return $even_arr;
       }

       var_dump(even_array(10));

       $divider = function ($a,$b) :int{
           $divider = $a/ $b;
           echo "<br>This is a function";
           return $divider;
       };

       echo "<br>Result". $divider(10,2)."<br>";

       $message = "Hello World";
       $display = function() use ($message) {
           echo $message;
       };

       $display();


     ?>
 </body>
 </html>