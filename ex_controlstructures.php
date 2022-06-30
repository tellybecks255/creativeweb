<?php

use const Config\MAX_NUM;

require_once 'config.php' ;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise on Control Structures</title>
</head>
<body>
    <h2>Party Table</h2>
    <table>
        <tr>
            <th>Number</th>
            <th>Parity</th>
        </tr>
        <?php
            for ($counter=0; $counter <= Config\MAX_NUM; $counter++) { 
               $result = $counter % 2;
               echo "<tr>";
               echo "<td>$counter</td>";
               if ($result== 0) {
                echo "<td>Even</td>";
                echo "</tr>";
               }
               else{
                echo "<td>Odd</td>";
                echo "</tr>";
               }
            }


        ?>
    </table>
    <h2>Multiplication Table</h2>
    <table cellpadding="1" cellspacing="3" style="border:1px solid black;   text_align: center;">
        <?php
        for ($tablerow=1;  $tablerow <=10 ; $tablerow++) { 
           echo '<tr>';
           for ($column=1; $column<=10; $column++) { 
               # code...
           }
           echo '</tr>';
        }
        ?>
    </table>

    
</body>
</html>