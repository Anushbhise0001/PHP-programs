<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print statement in php</title>
</head>

<body>
    <center>
        <?php
        //php me print statement echo statement ke similer hota hai but some small differences hote hai.
        //print function ya statement output ke time true hone per 1 value generate kerta hai or false hone per 0.
        //isse process some slow ho jati hai but echo koi value return nahi kerta hai so ye fast hai.
        
        //print statement with and without parethensis.
        print "Hello world! <br>";
        print ("Hello world! <br>");

        //print statement with variables.
        $name = "anush bhise";
        print "Hello $name <br>";
        print 'Hello $name <br>'; //single quotes me variable ko bhi string ke tarah treat kiya jata hai.
        // try print 'Hello'.$name.'<br>';
        
        //print statement with multiple parameters and arguments.
        print "hello" . "world" . "this is" . "php";

        //print statement with html tags and markup.
        print "<h1>Hello world</h1>";
        print "<p>Hello world</p>";
        ?>
    </center>
</body>

</html>