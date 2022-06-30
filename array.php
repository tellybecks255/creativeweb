<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/page.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Arrays</title>
</head>

<body>
    <h1>Introduction to arrays</h1>
    <?php
    $names = ['Brian', 'Pryde', 'Telly'];
    var_dump($names);
    echo "<br>";
    print_r($names);
    echo "<br>";
    $mix = ['Brian', 20000, 2.5];
    var_dump($mix);
    echo "<br>";
    echo "My name is $mix[0]. I earn $mix[1] and i pay " . ($mix[2] / 100) * $mix[1] . " in taxes";
    $arr = ['I', 'am', 'a', 'man ', 'of ', 'integrity'];
    echo "$arr[2] $arr[3] $arr[4] $arr[5] $arr[1]  $arr[0]";
    $info = ['My', 'name', ' is', 'Brian', 'and', 'creative', 'is', 'a', 'good', 'school'];
    // To----" Brian Is a good name and my school is creative
    echo "<br>$info[3] $info[2] $info[7] $info[8] $info[1] $info[4] $info[0] $info[9] $info[6] $info[5]";
    echo "<h3>For Loop Of array</h3>";
    for ($i = 0; $i < count($info); $i++) {
        echo "<br> Word $i: $info[$i] <br>";
        //when i =0, what is the result of line 26 on the browser ?
        // Word 0 : My
    }
    echo "<h3>Foreach Of array</h3>";
    foreach ($info as $key) {
        echo " Word $key <br>";
    }
    echo "<br>";
    $array = [10];
    $array[1] = [10, 20, 50];
    $array[] = "Two";
    $array[] = 3.0002;
    $array[] = 3.0004;
    $array[1] = 'New entry';
    var_dump($array);
    echo "<br>";

    echo "<h3>Associative Array</h3>";
    $user = [
        "name" => "Brian",
        "age" => "27",
        "sex" => "male",
        "email" => "briantbrian@gmail.com",
        "address" => "molyko-buea",
    ];

    $user1 = [
        "name" => "Mark",
        "age" => "24",
        "sex" => "male",
        "email" => "mark@gmail.com",
        "address" => "small_soppo-buea",
    ];

    $user2 = [
        "name" => "Erica",
        "age" => "23",
        "sex" => "female",
        "email" => "erica@gmail.com",
        "address" => "dirtysouth-buea",
    ];
    $user3 = [
        "name" => "Thelma",
        "age" => "23",
        "sex" => "female",
        "email" => "thelma@gmail.com",
        "address" => "mayors_street-buea",
    ];
    $user3['address'] = 'back_stclaire-buea';
    var_dump($user3);


    echo "Hello Guys, my name is $user[name] and $user2[name] is my tight man <br>";
    echo "Also, I am  $user[age] and i stay at $user[address]<br>";

    ?>
    <table class="table">
        <!-- table Heading  -->
        <tr>
            <?php
            foreach (array_keys($user) as $key) {
                echo "<th>$key</th>";
            }
            ?>
        </tr>
        <tr>
            <?php
            foreach ($user as $value) {
                echo "<td>$value</td>";
            }
            ?>
        </tr>

    </table>
    <h3>Multidimensional Arrays</h3>
    <br>
    <h4>Index Multi Dimensional Arrays</h4>
    <?php
    $multi = [
        [1, 2, 3, 4, 5],
        [6, 7, 8, 9],
        [0, 21, 50, 11]
    ];
    var_dump($multi);
    ?>
    <br>
    <h4>Associative Multi Dimensional Arrays</h4>
    <?php
    $users = [
        $user, $user1, $user2, $user3
    ];
    ?>
    <table class="table">
        <tr>
            <?php
            foreach (array_keys($user) as $key) {
                echo "<th>$key</th>";
            }
            ?>
        </tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <?php
                foreach ($user as $value) {
                    echo "<td>$value</td>";
                }
                ?>
            </tr>
        <?php  } ?>
    </table>

    <h3>World Clock table </h3>
    <?php $data = DateTimeZone::listIdentifiers(DateTimeZone::AMERICA);
    // var_dump($data);
    ?>

    <table class="table">
        <tr>
            <th>Place</th>
            <th>Time</th>
        </tr>
        <?php
        for ($i = 0; $i < count($data); $i++) {
            echo ' <tr>';
            $dateTime = new DateTime('now', new DateTimeZone("$data[$i]"));
            // $dateTime = new DateTime('now', new DateTimeZone("Africa/Abidjan")); when i =0
            echo " <td>$data[$i]</td>";
            echo " <td>" . $dateTime->format("Y-m-d H:i A") . "</td>";
            echo ' </tr>';
        }
        ?>
    </table>







</body>

</html>