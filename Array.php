<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
</body>
</html>
<?php

$names = ['PRYDE','TELLY','LEWIS']; 
var_dump($names).PHP_EOL;
echo "<br>";
print_r($names);

$Mix = ['PRYDE',20000, 5.5];
var_dump($Mix).PHP_EOL;
echo "<br>";
print_r($Mix);
echo "My name is $Mix[0].I earn $Mix[1]. and I pay $Mix[2] in taxes. $Mix[2]/100*$Mix[1]";

$arr= ['My', 'name', 'is', 'Neymarjr', 'and', 'we', 'are', 'four', 'of', 'us', 'in','class'];

echo "<br>$arr[10] $arr[11] $arr[5] $arr[6] $arr[7]  $arr[8] $arr[9] $arr[4] $arr[0] $arr[1] $arr[2] $arr[3]";
$info = ['My', 'name', 'is', 'Brian', 'and', 'Creative', 'is', 'a', 'good', 'School'];
// To---" Pryde is a good name and my school is creative
echo "<br>$info[3] $info[2] $info[7] $info[8] $info[1] $info[4]
 $info[0] $info[9] $info[6] $info[5]";
for ( $i=0; $i < count($info); $i++ ) {
    echo "<br> word $i: $info[$i] <br>";

}

foreach ($info as $Key) {
    echo "<br> Word $Key";
}
echo "<br>";
$array = [10];
$array[1] = [10,20,50]; 
$array[] = "Two";
$array[] = 3.0002;
$array[] = 3.0004;
// $array=[];
var_dump($array);




echo "<h3> Associative Arrays </h3>";
$userdetails = [
    "name" => "birdmann",
    "age" => "80",
    "sex" => "male",
    "email" => "birdmann@gmail.com",
    "address" => "molyko the heart of buea",
];
$userdetails2 = [
    "name" => "telly",
    "age" => "12",
    "sex" => "male",
    "email" => "telly@gmail.com",
    "address" => "tole",
];
var_dump($userdetails);

$userdetails3 = [
    "name" => "Neymar",
    "age" => "9",
    "sex" => "male",
    "email" => "neymar@gmail.com",
    "address" => "Ekona",
];
var_dump($userdetails);

$userdetails4 = [
    "name" => "vanessa",
    "age" => "19",
    "sex" => "female",
    "email" => "vanessa@gmail.com",
    "address" => "mayor-street",
];
var_dump($userdetails);
 
var_dump(array_keys($userdetails));

?>
<table class="table">
   <!--table Heading -->
    <tr>
        <?php
        foreach(array_keys($userdetails) as $key){
            echo"<th>$key</th>";
        }
        ?>
 </tr>
 <tr>
    <?php
    foreach($userdetails as $value){
        echo "<td>$value</td>";
    }
    ?>
    </tr>
       <?php
    foreach($userdetails2 as $value){
        echo "<td>$value</td>";
    }
    ?>
    </tr>
       <?php
    foreach($userdetails3 as $value){
        echo "<td>$value</td>";
    }
    ?>
    </tr>
       <?php
    foreach($userdetails4 as $value){
        echo "<td>$value</td>";
    }
    ?>
    </tr>
</table>
<h3>Multidimensional Arrays</h3>
      <h4>Index Mulit Dimensional Arrays</h4>
      <?php
      $multi =[
          [1,2,3,4,5],
          [6,7,8,9],
          [0,21,50,11]
      ];
      var_dump($multi);
?>
<br>
<h4>Associative Mulit Dimensional Arrays</h4>
      <?php
      $userdetails =[
          $userdetails,$userdetails2,$userdetails3,$userdetails4
      ];
      var_dump($userdetails);
      ?>
     <table class="table">
    <tr>
        <?php
        foreach(array_keys($userdetails) as $key){
            echo"<th>$key</th>";
        }
        ?>
 </tr>
 <?php foreach ($userdetails as $user) { ?>
    <tr> 
    <?php
    foreach($userdetails as $value) {
        echo "<td>$value</td>";
    }    
    
 }
?>