<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
//ACTIVITY ONE
$a = 15;
$b = 8;
$c = 25;

$greatest = $a;
$smallest = $a;

if ($b > $greatest) {
    $greatest = $b;
}

if ($c > $greatest) {
    $greatest = $c;
}

if ($b < $smallest) {
    $smallest = $b;
}

if ($c < $smallest) {
    $smallest = $c;
}

echo "Greatest number: " . $greatest . "<br>";
echo "Smallest number: " . $smallest;


//ACTIVITY TWO


$num = 12;

if ($num % 2 == 0 && $num % 3 == 0) {
    echo "The number is divisible by both 2 and 3.";
}
elseif ($num % 2 == 0) {
    echo "The number is divisible by 2.";
}
elseif ($num % 3 == 0) {
    echo "The number is divisible by 3.";
}
else {
    echo "The number is divisible by neither 2 nor 3.";
}


//ACTIVIT THREE


for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}


//ACTIVIT FOUR


for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) {
        echo $i . " ";
    }
}


//ACTIVITY FIVE



$num = 12345;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 10;
    $reverse = ($reverse * 10) + $digit;
    $num = intdiv($num, 10);
}

echo "Reverse: " . $reverse;


//ACTIVIT SIX


$a = 8;
$b = 12;

$lcm = $a;

while ($lcm % $a != 0 || $lcm % $b != 0) {
    $lcm++;
}

echo "LCM of $a and $b = " . $lcm;


//ACTIVIT SEVEN



$a = 18;
$b = 24;

$hcf = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $hcf = $i;
    }
}

echo "HCF of $a and $b = " . $hcf;


//ACTIVITY EIGHT


for ($i = 1; $i <= 12; $i++) {

    for ($j = 1; $j <= 12; $j++) {
        echo ($i * $j) . " ";
    }

    echo "<br>";
}

 //ACTIVITY NINE


$num = 17;
$count = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $count++;
    }
}

if ($count == 2) {
    echo "$num is a prime number.";
} else {
    echo "$num is a non-prime number.";
}


//ACTIVITY TEN



for ($num = 10; $num <= 50; $num++) {

    $count = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }

    if ($count == 2) {
        echo $num . " ";
    }
}




    ?>
</body>
</html>