<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Keyword php variable</title>
</head>
<body>
    <?php
    //static keyword variable ek local variable hota hai jiske value destroy nahi hoti hai
    //hum future me inka use ker sakte hai. Because ek local variable function ke call hone ke baad unuse ho jata hai.
    function show(){
        static $x = 1; //initial valuue
        echo $x++;
    }
    show(); // 1
    echo "<br>";
    show(); //2  
    ?>
</body>
</html>