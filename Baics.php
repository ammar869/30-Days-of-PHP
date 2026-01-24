<?php

// ===============================
// 1. Output
// ===============================
echo "Hello PHP <br>";

// ===============================
// 2. Variables & Data Types
// ===============================
$name = "Ammar";
$age = 20;
$cgpa = 3.5;
$isStudent = true;

echo "Name: $name <br>";
echo "Age: $age <br>";
echo "CGPA: $cgpa <br>";
echo "Student: $isStudent <br><br>";

// ===============================
// 3. Operators
// ===============================
$a = 10;
$b = 5;

echo "Add: " . ($a + $b) . "<br>";
echo "Sub: " . ($a - $b) . "<br>";
echo "Mul: " . ($a * $b) . "<br>";
echo "Div: " . ($a / $b) . "<br><br>";

// ===============================
// 4. Condition
// ===============================
$marks = 85;

if ($marks >= 80) {
    echo "Grade: A <br><br>";
} elseif ($marks >= 60) {
    echo "Grade: B <br><br>";
} else {
    echo "Grade: Fail <br><br>";
}

// ===============================
// 5. Loops
// ===============================
echo "For Loop: ";
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
echo "<br>";

echo "While Loop: ";
$i = 1;
while ($i <= 5) {
    echo $i . " ";
    $i++;
}
echo "<br><br>";

// ===============================
// 6. Arrays
// ===============================
$numbers = [10, 20, 30];
$student = [
    "name" => "Ammar",
    "dept" => "Software Engineering",
    "age" => 20
];

echo "First Number: " . $numbers[0] . "<br>";
echo "Student Name: " . $student["name"] . "<br><br>";

// ===============================
// 7. Foreach Loop
// ===============================
echo "Colors: ";
$colors = ["Red", "Blue", "Green"];
foreach ($colors as $color) {
    echo $color . " ";
}
echo "<br><br>";

// ===============================
// 8. Functions
// ===============================
function add($x, $y) {
    return $x + $y;
}
echo "Function Add: " . add(5, 3) . "<br><br>";

// ===============================
// 9. Built-in Functions
// ===============================
$test = "";

echo "Isset: " . isset($test) . "<br>";
echo "Empty: " . empty($test) . "<br><br>";

// ===============================
// 10. Type Casting
// ===============================
$num = "10";
$num = (int)$num;

echo "Type Casting Result: " . ($num + 5) . "<br>";

?>
