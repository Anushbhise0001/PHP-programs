<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php asssignment operators</title>
</head>
<body>
    <?php
    //Assignment operators in php used to assing values to variables.
    // = is most common assignment operator, is used to assing the value to variable.
    $x = 10;
    echo $x;
    echo "<br>";
    echo $x += 10; // this will add 10 and return value of x.
    echo "<br>";
    echo $x -= 5; // this will subtract 5 from x and return value of x.
    echo "<br>";
    echo $x *= 2; // this will multiply 2 from x and return value of x.
    echo "<br>";
    echo $x /= 3; // this will divide x by 3 and return value of x.
    echo "<br>";
    echo $x %= 4; // this will return the remainder of x divided by 4.
    ?>
</body>
</html>