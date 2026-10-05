<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
         //Multi-dimensional Array
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

//Explode, Shuffle Function

$a = "The quick brown fox jumps over the lazy dog";

$b = explode (" ", $a);

shuffle($b);

echo "<pre>";
print_r($b);
echo "</pre>";

//Array_Merge, Array_Reverse function

$a1 = array (1, 2, 3);
$a2 = array (1, 5, 6);
$a3 = array_merge($a1, $a2);
echo "<pre>";
print_r($a3);
echo "</pre>";
$p = array_reverse($a3);

//array_push, array_pop, end function

$a = array (2, 4, 6, 8);
array_push($a, 10);
$a = array (1, 2, 3, 4);
array_pop($a);
$last = end($p);
echo "The last element of the array is: " . $last;

//Example of function creating

function writeMsg () {
    echo "Hello world!";
}

writeMsg ();

//Example factorial of number 

function factorial ($a) {
    $result = 1;
    for ($i = 1 ; $i <= $a; $i++)
    $result *= $i;
    echo "<br>Factorial of $a is : $result";
}
factorial (5);

//Example of

function Factorial ($a) {
    $result = 1;
    for ($i = 1 ; $i <= $a; $i++) {
        $result *= $i;
    }
    return ("<br>Factorial of $a is : $result");
}

echo (Factorial(5));
?>

</body>
</html>