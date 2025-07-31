<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php data types</title>
</head>
<body>
    <?php
    //in php there are some data types 
    //variables can be declared with $ symbol
    //and can be used to store different types of data
    $age = 25; //Integer type
    $name = "Anush bhise!";  //String type
    $isMarriage = false; //Boolean type
    $grade = 'A'; //Character type
    $amount = 250000.00;

    //printing the variables with data types
    echo "My name is ". $name.var_dump($name)."<br>";
    echo "My age is ". $age.var_dump($age)."<br>";
    echo "I am not single ".$isMarriage.var_dump($isMarriage)."<br>";
    echo "My pocket amount is". $amount.var_dump($amount). "<br>";
    echo "My grade is".$grade.var_dump($grade). "<br>";
    ?>
</body>
</html>