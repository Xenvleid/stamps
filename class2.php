<?php
//this is a comment ad it will be ignored
$name = "Pingu"; // text vaiables
$gpa = 4.0; // floating point numerical vairables
$age = 33; // integer numeric variables
$isRaining = true; // flags

echo "<br/><br/><br/>";
//show on screen
echo "pingu";
echo $name;
echo 5;
echo $age;

echo "<br/><br/><br/>";
//debugon screen
print_r($name);
var_dump($name);
var_dump($gpa);
var_dump($isRaining);

echo "<br/><br/><br/>";
//text operations
echo "Hola " . $name;
echo "Hola $name";

echo "<br/><br/><br/>";
//numerical operations (+-*/%)
echo 4 + $age;
echo 4 * $age;
echo 11 % 2;

echo "<br/><br/><br/>";
// comparisons (> < == != <= >=)
echo 4 < $age;

echo "<br/><br/><br/>";

//logics (&& || !)
echo true && true; // and
echo true || false; // or
echo !false; // negation

//conditionals
if(true) {
    echo "this is a true value";
} else {
    echo "this is a false value";
}

if($isRaining) echo "This is a true value"; //doesn't need "()" if no real comp exists.

if($age < 12 && $isRaining) {
    echo "this is a true value";
} else {
    echo "this is a false value";
}

$value =($age < 12 && $isRaining) ? "ROBERTO" : "SAKVI"; // "?" WHAT COMES AFTER IS TRUE, AFTER : IS FALSE
echo "This is a $response value";

echo "<br/><br/><br/>";
//arrays numerical
$fruits = ["mango","banana","carambola","mamey","lulo"];

echo $fruits[0]; // get position of mango
echo count($fruits); // get the array length
echo $fruits[count($fruits)-1] //get last element

echo "<br/><br/><br/>";

// arrays asociative
$student = [
    "name" => "Salvi", 
    "age" => "33", 
    "gpa" => "4.0"
];

print_r($student);
echo $student["name"];
echo $student["age"];

echo json_encode($student); // from array/object to JSON
print_r(json_decode('{"name":"Salvi","age":"33","gpa":"4.0"}')); // from JSON to array/object

echo "<br/><br/><br/>";

// for loop
for ($i=0; $i<count($fruits); $i++) { 
    echo "<br/>$i: My fruit is " . $fruits[$i];
}

// while loop
$i = 1;
while($i <= 10) {
    echo "<br/>$i";
    $i++;
}

// foreach loop
foreach ($fruits as $value) {
    echo "<br/>$value";
}

foreach ($student as $key => $value) { // $key takes the array key
    echo "<br/>$key: $value";
}

echo "<br/><br/><br/>";

// basic functions
function showMessage() {
    echo "Hello my name is Salvi and I am 33 years old";
}

// function with params
function showMessageWithParams($name, $age) {
    echo "Hello my name is $name and I my age is $age";
}

// function with params and returns
function showMessageWithParamsAndReturn($name, $age) {
    return "Hello my name is $name and I am $age years old";
}

showMessage();
echo "<br/><br/><br/>";
showMessageWithParams("Eduardito", $age);
echo "<br/><br/><br/>";
echo showMessageWithParamsAndReturn("Eduardito", 55);
echo "<br/><br/><br/>";
$message = showMessageWithParamsAndReturn("Eduardito", 55);
echo "$message and my GPA is $gpa";

define("COLOR", "red");

$text = "HELLO";

function scope
function myFunction() {
    $text = "HOLA";
    echo $text;
}

myFunction();

echo "<br/><br/><br/>"; 

?>

<p>Hola</p>

<?php
echo $text;
echo COLOR;
?>


