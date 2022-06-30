
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in Php </title>
</head>
<body>
    <h2>HEREDOC</h2>
    <?php
    //   This is Here DOc
    $name= 'Brian';
    $race = "Black";
    echo <<<DOC_LABEL
        These are the terms and conditions to using my site
        I am a <strong> $race</strong> named <strong> $name</strong><br>
        First of you must have internet and <strong>Lots Of Internet</strong>
        Plenty Mbs. The next thing is to have a good computer and intelligence to follow <br>
        Sense is priceless and my clients must be wise <br> to display text we use the echo tag and we use " ." to seprate text
    DOC_LABEL;

     //   This is NowDOc
     echo "<h2>NOWDOC</h2>";
     $name= 'Brian';
     $race = "Black";
     echo <<<'DOC_LABEL'
         These are the terms and conditions to using my site
         I am a <strong> $race</strong> named <strong> $name</strong><br>
         First of you must have internet and <strong>Lots Of Internet</strong>
         Plenty Mbs. The next thing is to have a good computer and intelligence to follow <br>
         Sense is priceless and my clients must be wise <br> to display text we use the echo tag and we use " ." to seprate text
     DOC_LABEL;

     echo "<h2>string length</h2>";
    $greetings ="hi class";
    $string= "This is a string";
    $username = "thetechG";

    if (strlen($username)>=10) {
    echo "  This is an invalid Username"."<br>";
    }
    else {
        echo "Welcome $username"."<br>";
    }

    echo strlen($greetings)." is the length of $greetings<br>";
    echo strlen($string)." Is the length of $string".PHP_EOL;

    echo "<h2>string position</h2>";

    $text = "This is a sentence and we are looking for you in this sentence";
    $search = "WE"; //case sensitive string
    $search1 = "You"; //case insensitive string
    echo strpos($text,$search)."<br>";//this is case sensitive 
    echo stripos($text,$search)."<br>";//this is case insensitive 


    ?>
</body>
</html>