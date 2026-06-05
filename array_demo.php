<?php
$cars = array("Volvo", "BMW", "Toyota","Honda","Suzuki","Hyundai","MG","Tata"); 

//coutn function
echo count($cars);
echo"<br>";

//create and display
var_dump($cars);
echo"<br>";

//access array item
echo $cars[0];
echo"<br>";

//change value of array item
$cars[1] = "Ford";
var_dump($cars);
echo "<br>";
echo "<br>";

//associate array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo "<br>";

//access array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];
echo"<br>";

//change value
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);
echo "<br>";
echo"<br>";

//[] - adds a single item to the end of an array
$cars[]="BMW";
var_dump($cars);
echo"<br>";
echo"<br>";
// $cars[]="Mini cooper";
// $cars[]="Fiat";
// var_dump($cars);
// echo"<br>";

//array_push() - adds one or more items to the end of an array
array_push($cars,"Fiat","mini cooper");
var_dump($cars);
echo"<br>";
echo"<br>";

//array_unshift() - adds one or more items to the beginning of an array
array_unshift($cars,"BMW","FORD");
var_dump($cars);
echo"<br>";
echo"<br>";

//array_splice() - removes a portion of an array and replaces it with new elements
$new_car = "FIAT";
array_splice($cars,1,2,$new_car);
var_dump($cars);
echo"<br>";
echo"<br>";

//array_merge() - merges two or more arrays 
$result = array_merge($cars,$car);
var_dump($result);
echo"<br>";
echo"<br>";

// array_splice() - removes a portion of the array starting from a start position and length
array_splice($cars,1,1);
var_dump($cars);
echo"<br>";
echo"<br>";

// unset() - removes the element associated with a specific key
unset($cars[1]);
var_dump($cars);
echo"<br>";
echo"<br>";

// array_diff() - remove items from an associative array
$newarray = array_diff($car, ["Mustang", 1964]);
var_dump($newarray);
echo"<br>";
echo"<br>";

// array_pop() - removes the last array item
array_pop($cars);
var_dump($cars);
echo"<br>";
echo"<br>";

// array_shift() - removes the first array item
array_shift($cars);
var_dump($cars);
echo"<br>";
echo"<br>";

// sort() - sorts an indexed array in ascending order
sort($cars);
print_r($cars);
echo"<br>";
echo"<br>";

// rsort() - sorts an indexed array in descending order
rsort($cars);
print_r($cars);
echo"<br>";
echo"<br>";

// asort() - sorts an associative array in ascending order, according to the value
asort($car);
print_r($car);
echo"<br>";
echo"<br>";

// ksort() - sorts an associative array in ascending order, according to the key
ksort($car);
print_r($car);
echo"<br>";
echo"<br>";

// arsort() - sorts an associative array in descending order, according to the value
arsort($car);
print_r($car);
echo"<br>";
echo"<br>";

// krsort() - sorts an associative array in descending order, according to the key
krsort($car);
print_r($car);
echo"<br>";
echo"<br>";

//multidimensional array
$cars = array (
  array("Volvo", 22, 18),
  array("BMW", 15, 13),
  array("Saab", 5, 2),
  array("Land Rover", 17, 15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
echo"<br>";
echo"<br>";

//OPERATORS

// Arithmetic operators
$x = 500;
$y = 5;
echo "SUM:" . $x + $y . "<br>";
echo "SUB:" . $x - $y . "<br>";
echo "MUL:" . $x * $y . "<br>";
echo "DIV:" . $x / $y . "<br>";
echo "MODULUS:" . $x % $y . "<br>";
echo "EXPONENTIATION:" . $x ** $y . "<br>";
echo"<br>";
echo"<br>";

// Assignment operators
$a = 20;
echo "ASIGN:" . $a. "<br>";
echo "ADD AND ASSIGN:" . $a += 100 . "<br>";
echo "SUB AND ASSIGN:" . $a -= 10 . "<br>";
echo "MUL AND ASSIGN:" . $a *= 10 . "<br>";
echo "DIV AND ASSIGN:" . $a /= 2 . "<br>";
echo "MODULUS AND ASSIGN:" . $a %= 20 . "<br>";
echo"<br>";
echo"<br>";

// Comparison operators
echo "EQUAL:" . $x == $y . "<br>";
echo "IDENTICAL:" . $x === $y . "<br>";
echo "NOT EQUAL:" . $x != $y . "<br>";
echo "NOT EQUAL:" . $x <> $y . "<br>";
echo "NOT IDENTICAL:" . $x !== $y . "<br>";
echo "GREATER THAN:" . $x > $y . "<br>";
echo "LESS THAN:" . $x < $y . "<br>";
echo "GREATER THAN OR EQUAL TO:" . $x >= $y . "<br>";
echo "LESS THAN OR EQUAL TO:" . $x <= $y . "<br>";
echo "SPACESHIP:" . $x <=> $y . "<br>";
echo"<br>";
echo"<br>";

// Increment/Decrement operators
$x1=100;
echo ++$x1;
echo"<br>";
echo $x1++;
echo"<br>";
echo --$x1;
echo"<br>";
echo $x1--;
echo"<br>";
echo"<br>";

// Logical operators
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo"<br>";

if ($x == 100 or $y == 50) {
    echo "Hello world!";
}
echo"<br>";

if ($x == 100 xor $y == 50) {
    echo "Hello world!";
}
echo"<br>";

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
echo"<br>";

if ($x == 100 || $y == 50) {
    echo "Hello world!";
}
echo"<br>";

if (!($x == 100)) {
    echo "Hello world!";
}

echo"<br>";
echo"<br>";

// String operators
$txt1 = "Hello";
$txt2 = " duniaa!";
echo $txt1 . $txt2;
echo"<br>";

$txt11 = "Hello";
$txt21 = " hii!";
$txt11 .= $txt21;
echo $txt11;
echo"<br>";
echo"<br>";

// Array operators
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  
print_r($x + $y); // union of $x and $y
echo"<br>";
var_dump($x == $y);
echo"<br>";
var_dump($x === $y);
echo"<br>";
var_dump($x != $y);
echo"<br>";
var_dump($x <> $y);
echo"<br>";
var_dump($x !== $y);
echo"<br>";
echo"<br>";

// Conditional operators

   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
    echo("<br>");
    echo("<br>");

    // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>