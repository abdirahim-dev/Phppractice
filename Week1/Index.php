<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   //echo_
    echo "Hello World";
    echo "<br>";
    echo "my cource php";
    echo "<br>";
    echo "my cource php","iam learning at now";

 print
    print "Hello my print";
    echo "<br>";
    print "my name is   abdirahim";

 single qoutes
 $a = 20;
 echo '$a';
double qoutes 
 $a = 20;
 echo "$a";

varable two Aurguments   
 $MyName = "Abdirahim, Abdikadir";     
 echo "My Name is $MyName";

// constant

 define("school","Faahim");
 print school;

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

    //swtich stetemnts 
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
    ?>
</body>
</html>
