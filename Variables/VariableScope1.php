<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables scope in php</title>
</head>
<body>
    <?php
//Using global keyword to access global variables inside a function.
$a = 10; //Global variable
function test(){
    global $a; //Accessing global variable using global keyword
    $b = 90; //Local variable
    echo "Inside of function: ".$a+$b;
} 
test();

    ?>
</body>
</html>