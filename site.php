<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = "Giraffe Academy";
    $characterName = "John";
    $characterAge = 35;
    echo "<h1>ELLIE WEBSITE</h1>";
    echo "<hr>";
    echo "<p>There once was a man called $characterName</p>";
    echo "This is cool and $characterAge";
    echo "<hr>";
    echo strlen($characterName);
    echo "<br>";
    echo strtolower($characterName);
    echo "<br>";
    echo $characterName[0];
    echo "<br>";
    $characterName[0] = "A";
    echo $characterName;
    echo "<br>";
    echo str_replace("Giraffe", "Panda", $name);
    echo "<br>";
    echo substr($characterName, 1, 2);
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    $num = 10;
    $num++;
    echo $num;
    echo "<br>";
    echo sqrt(144)

        ?>
</body>

</html>