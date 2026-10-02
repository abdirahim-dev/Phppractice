<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
$a = 10;
$b = 45;
$c = 25;


$greatest = $a;
if ($b > $greatest) {
    $greatest = $b;
}
if ($c > $greatest) {
    $greatest = $c;
}


$smallest = $a;
if ($b < $smallest) {
    $smallest = $b;
}
if ($c < $smallest) {
    $smallest = $c;
}

echo "Tirooyinka waa: $a, $b, $c <br>";
echo "Lambarka ugu wayn: $greatest <br>";
echo "Lambarka ugu yar: $smallest <br>";

$num = 6;
if ($num % 2 == 0 && $num % 3 == 0) {
    echo "$num waxaa loo qaybin karaa labadaba (2 iyo 3).";
} elseif ($num % 2 == 0) {
    echo "$num waxaa loo qaybin karaa 2 kaliya.";
} elseif ($num % 3 == 0) {
    echo "$num waxaa loo qaybin karaa 3 kaliya.";
} else {
    echo "$num lama qaybin karo 2 mana 3.";
}

echo "Tirooyinka Odd ah (2 ilaa 20):<br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "Tirooyinka Even ah (35 ilaa 7):<br>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}


echo "Tirooyinka u qaybsami kara 2 iyo 5 isla markaana u dhaxeeya 50 ilaa 2:<br>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}



$num = 12345;
$original = $num;
$reverse = 0;

while ($num > 0) {
    $remainder = $num % 10;           
    $reverse = ($reverse * 10) + $remainder;
}

echo "Tiradii hore: $original <br>";
echo "Tiradii la rogay: $reverse <br>";



    ?>
</body>
</html>