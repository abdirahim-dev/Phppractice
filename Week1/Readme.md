  
1. Echo, Print, Variables, and Quotes

In this section, I practiced some basic PHP features, including echo, print, variables, and the difference between single and double quotes.

#Screenshoot Name

<img width="946" height="473" alt="Echo_print" src="https://github.com/user-attachments/assets/145cb8d1-2333-4eb2-8c89-12c864f849f6" />


Echo

echo is used to display text or values on the webpage.


echo "Hello World";
echo "<br>";
echo "I am learning PHP";

<br> is used to create a new line.

Print

print is also used to display text.

print "Hello my print";
print "My name is Abdirahim";

Both echo and print can be used to display output in PHP.

Single Quotes


$a = 20;
echo '$a';

Output:

$a

Single quotes display the variable name as text.

Double Quotes

$a = 20;
echo "$a";


$a = 20;
echo "$a";

Output:

20

Double quotes allow PHP to display the value of the variable.

Variables

Variables are used to store data in PHP.

$myName = "Abdirahim";

echo "My name is $myName";


Key Points
echo displays output.
print also displays output.
PHP variables start with $.
Single quotes do not interpret variables.
Double quotes can interpret variables.
<br> creates a new line.

2. Constants and If / Else Statements
In this section, I practiced constants and conditional statements using if, elseif, and else.
Constant
A constant is a value that is defined once and normally does not change.

define("school", "Faahim");

print school;

2  ifelse and if Else if Statements
If / Else Statement

#SCreenshoot Name
<img width="947" height="549" alt="Constant_If_Else_If_Elseif" src="https://github.com/user-attachments/assets/eeef1a02-38e5-4188-a618-f418d5f8f253" />


Conditional statements are used to make decisions based on a condition.

Since the age is 17, the output will be:

If / Elseif / Else
I also practiced checking marks using multiple conditions.
$marks = 45;

if ($marks >= 90) {
    echo "Excellent";
} elseif ($marks > 80) {
    echo "Very Good";
} elseif ($marks > 50) {
    echo "Minimal Pass";
} else {
    echo "Not Pass";
}

Key Points
if checks a condition.
elseif checks another condition.
else runs when all previous conditions are false.
Conditions are checked from top to bottom.
Conditional statements help programs make decisions.


3. Switch Statement

In this section, I practiced the PHP switch statement.

#SCreenshoot Name
<img width="946" height="548" alt="Switch,Statement" src="https://github.com/user-attachments/assets/8cbf30f5-1845-4b41-966c-4be9709e1f34" />


A switch statement is useful when we want to compare one value with multiple possible values.

Case

A case represents a possible value.

case "Monday":
    echo "Today is Monday";
    break;
#Url Name
<img width="954" height="575" alt="Screenshot 2026-09-21 182640" src="https://github.com/user-attachments/assets/b7f41cd7-8bf6-49bc-81ad-99b2d0a29fe3" />
#Url
http://localhost/Phppractice/Index.php








