<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    //Multi-dimensional Array
    <?php
$student = array (
    array ("Mohamed", 1990, "Hodan", "0608124390"),
    array ("Ahmed", 2001, "Yaaqshiid", "0608124391"),
    array ("Jaamac", 1986, "Shangaani", "0608124392"),
);

echo ("Printing array key/value pairs:<br>");
foreach ($student as $k)
    echo ("$k[0], $k[1], $k[2], $k[3]<br>");

// Or
echo "Array elements are:<br>";
foreach ($student as $s) {
    foreach ($s as $v)
        echo ("$v<br>");
}

$info = array (
    "Mohamed",
    "Ahmed",
    "Jaamac",
    21
);

//check if a variable is an array

if(is_array($info))
{
    echo "Yes, it is an array";
}
else
{
    echo "No, it is not an array";
}


//check if a specific value exists in an array
if(in_array("21", $info))
{
    echo "<br>Mohamed exists in the array";
}
else
{
    echo "<br>Mohamed does not exist in the array";
}

?>

</body>
</html>