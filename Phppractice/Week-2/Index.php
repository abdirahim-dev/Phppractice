<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   echo

    echo "Hello World";
    echo "<br>";
    echo "my cource php";
    echo "<br>";
    echo "my cource php","iam learning at now";
  Print

   print
      print "Hello my print";
     echo "<br>";
    print "my name is   abdirahim";

 SIngle Quoates

 $a = 20;
 echo '$a';

double qoutes 

 $a = 20;
 echo "$a";

  Two Aurguments

 $MyName = "Abdirahim, Abdikadir";     
 echo "My Name is $MyName";

constant

 define("school","Faahim");
 print school;

  if Statement

   if stetements 
    $age = 17;
    if ($age >= 18){
        echo "You are an adult";
    } else {
        echo "You are a minor";
    }

 if else stetements
    $marks = 45;
    if ($marks >= 90){
        echo "Excelent";
    }
    elseif ($marks >80){
    echo "Very Good";
    }
    elseif ($marks >50){
    echo "Minimal pass";
    }
    else{
        echo "Not pass";
    }

    swtich stetemnts 

$day = "Monday";

switch ($day) {

    case "Monday":
        echo "Today is Monday";
        break;

    case "Tuesday":
        echo "Today is Tuesday";
        break;

    case "Wednesday":
        echo "Today is Wednesday";
        break;

    default:
        echo "Unknown day";
}

$Name = 'Abdirahim';
echo $Name; 

define ("Age", 29);
echo Age;

$marks = 48.9;
if ($marks >= 49.9)
echo "Gudbay";
else 
 echo   "Haray";

   $marks = 84.5;
   if ($marks >= 94)
   echo "Excellent";
   else if ($marks >= 85.5)
   echo "Very Good";
   else if ($marks >=50)
   echo "Minimal pass";
   else
    echo "Not Pass";
  $name = "Abdirahim";
  $food = "Pizza";
  $price = 4.99;
  $tax_rate = 5.1;
  $employed = true;
  $for_sale = true;
  $age = 20;
  echo " Hello My Freind {$name}<br>";
  echo "I want {$food}<br>";
  echo "Your pizza is \${$price}<br>";
  echo "The sales tax rate is: {$tax_rate}% <br>";
  echo "{$employed}<br>";
  echo "$for_sale<br>";
  echo $age;

  $x = 10;
  $y = 2;
  $z = null;
  $z = $x + $y;
  $z = $x - $y;
  $z = $x * $y;
  $z = $x / $y;
  $z = $x ** $y;
  $z = $x && $y;
  


  echo $z;

example of while loop

$i = 1;
while ($i <= 15);
{
    echo "$i, ";
    $i++;
}

//Do while loop example

$result = 1;
$n = 5;
do {
	$result *= $n; 
	//$result = $result * $n;
	$n--;
} while ($n > 0);
echo $result;


    ?>
</body>
</html>