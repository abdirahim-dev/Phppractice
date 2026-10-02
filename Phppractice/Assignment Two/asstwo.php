<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//1) One-Dimensional Array

// 1. Declare and initialize the array
$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// 2. Print all elements
echo "All elements:<br>";

foreach ($numbers as $number) {
    echo $number . " ";
}

echo "<br><br>";

// 3. Calculate total of all elements
$total = 0;

foreach ($numbers as $number) {
    $total = $total + $number;
}

echo "Total of all elements = " . $total . "<br>";

// 4. Calculate total of even elements
$evenTotal = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenTotal = $evenTotal + $number;
    }
}

echo "Total of even elements = " . $evenTotal . "<br>";

// 5. Calculate total of odd elements
$oddTotal = 0;

foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $oddTotal = $oddTotal + $number;
    }
}

echo "Total of odd elements = " . $oddTotal . "<br><br>";

// 6. Find minimum element and its positions
$min = min($numbers);

echo "Minimum element = " . $min . "<br>";
echo "Minimum positions: ";

foreach ($numbers as $index => $number) {
    if ($number == $min) {
        echo $index . " ";
    }
}

echo "<br><br>";

// 7. Find maximum element and its positions
$max = max($numbers);

echo "Maximum element = " . $max . "<br>";
echo "Maximum positions: ";

foreach ($numbers as $index => $number) {
    if ($number == $max) {
        echo $index . " ";
    }
}


//2) Two-Dimensional Associative Array


$colors = array(
    "Light" => array(1, 3, 1),
    "Normal" => array(2, 3, 1),
    "Dark" => array(3, 2, 3)
);

foreach ($colors as $name => $values) {

    echo $name . ": ";

    foreach ($values as $value) {
        echo $value . " ";
    }

    echo "<br>";
}


//3) Student Information – Two-Dimensional Associative Array


$students = array(
    "CA221" => array(
        "Mohamed Ahmed Ali",
        "0648440403",
        "Laba Dhagax, Wardhiigley"
    ),

    "CA223" => array(
        "Ahmed Abdi Jama",
        "0647223201",
        "Taleex, Hodan"
    ),

    "CA224" => array(
        "Amina Nur Adan",
        "0646990276",
        "Macmacaanka, Dharkeynley"
    )
);

foreach ($students as $id => $student) {

    echo "ID: " . $id . "<br>";
    echo "Name: " . $student[0] . "<br>";
    echo "Phone: " . $student[1] . "<br>";
    echo "Address: " . $student[2] . "<br>";

    echo "<br>";
}


?>

</body>
</html>