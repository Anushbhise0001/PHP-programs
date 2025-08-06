<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo statement in php</title>
</head>
<body>
    <center>
    <?php
    //php me echo statement ka use output ko display kerne ke liye kiya jata hai.
    //We can use echo statement in different ways.
    //echo statement ka use different works ke liye ker sakte hai.
    
    //echo statement with use or withouse parentheses
    echo "Hello world"."<br>";
    echo("hello world")."<br>";

    //echo statement with variables
    $name = "world";
    echo "hello $name <br>";

    //echo statement with multiple parametes and arguments.
    echo "Hello", " ", "world", "<br>";
    $name1 = "hello";
    echo $name1." ".$name;

    //echo statement with html tags and markup.
    echo "<h1>hello world</h1>";
    echo "<p>hello world</p>";
    echo "<h6>hello world</h6>";

    //echo statement with different quotes.
    echo 'hello world'."<br>";
    echo "hello world"."<br>";

    $fname = "world";
    echo "<h1>hello $fname </h1><br>";
    echo '<h1>hello $fname </h1><br>'; //try '<h1>hello'. $fname. '</h1><br>
    // because in single quotes variable will not be paresed, it will be treated as a string.
    ?>
    </center>
</body>
</html>