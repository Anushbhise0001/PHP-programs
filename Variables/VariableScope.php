<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scopes in php</title>
</head>

<body>
    <?php
    //php me variable scopes three types ke hote hain.
    $a = 10; // Global variable
    function test()
    {
        //this give an error because $a in not in function scope
        //echo "Inside function: ".$a;
        $b = 50; //local variable
        echo "Inside of function:" . $b;
    }
    echo "Outside of function: " . $a;
    ?>
</body>

</html>