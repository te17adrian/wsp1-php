<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "wind";

    echo "<h1>Hello $name</h1>";

    echo "<h3>Det är bra att ha koll på datatyper</h3>";

    echo '<a href="https://www.php.net/manual/en/language.types.intro.php">';
    $tal1 = 13; // integer
    $tal2 = (int) "762"; //string
    $tal3 = true; //boolean
    $tal4 = (int) 532.532; //double
    $tal5 = null;

    echo $tal1 + $tal2 + $tal3 + $tal4 + $tal5;
    
    ?>

</body>
</html>