<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student = array(
        array ("Ali", 1990, "Hodan", "0616002315"),
        array ("Moha", 1880, "Waberi", "0616102417"),
        array ("Afrah", 1770, "Kaaraan", "0616889918"),

        
    );
    echo ("Printing array key/value pairs: <br>");
    foreach ($student as $k)
        echo ("$k[0],$k[1], $k[3]<br>")
    
    ?>
</body>
</html>