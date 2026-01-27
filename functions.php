function add($x,$y){
    $z = $x + $y;
    return $z;
}
$result = add(10, 20);
$name = 'Ammar'; // Single quotes
echo 'Hello, $name'; // Output: Hello, $name

echo "Hello, $name"; // Output: Hello, Ammar


$greeting = "Hello, " . $name;
echo $greeting;  // Output: Hello, Ammar
<?php

$name = "Ammar";
$welcome = "Welcome to PHP programming";
$sentence = "Learning PHP is fun and powerful";
$emptyString = "   spaces around   ";

echo $name . "\n";
echo "Length of name: " . strlen($name) . "\n";

echo strtoupper($welcome) . "\n";
echo strtolower($welcome) . "\n";

echo strpos($sentence, "PHP") . "\n";

$replaced = str_replace("fun", "awesome", $sentence);
echo $replaced . "\n";

$trimmed = trim($emptyString);
echo "[" . $trimmed . "]\n";

$substring = substr($sentence, 9, 3);
echo $substring . "\n";

$words = explode(" ", $sentence);
print_r($words);

$joined = implode("-", $words);
echo $joined . "\n";

$firstChar = $name[0];
echo $firstChar . "\n";

$lastChar = $name[strlen($name) - 1];
echo $lastChar . "\n";

$repeat = str_repeat("PHP ", 3);
echo $repeat . "\n";

$find = strstr($sentence, "powerful");
echo $find . "\n";

$upperFirst = ucfirst(strtolower($name));
echo $upperFirst . "\n";

$upperWords = ucwords($sentence);
echo $upperWords . "\n";

$contains = strpos($sentence, "code");
if ($contains === false) {
    echo "Word 'code' not found\n";
} else {
    echo "Word 'code' found at position: " . $contains . "\n";
}

?>
//----------------------------------Notes----------------------------------
<?php

// Variables with diverse string styles
$greeting = "Hello";
$target = 'World';
$phrase = "PHP strings are powerful!";
$sentence = "  Practice makes perfect.  ";

// Combine and display with interpolation and concatenation
echo "$greeting, $target!\n";
echo $greeting . ' ' . $target . "!\n";

// String length & trimming
echo strlen($sentence) . "\n";
echo trim($sentence) . "\n";

// Case manipulations
echo strtoupper($phrase) . "\n";
echo strtolower($phrase) . "\n";
echo ucfirst(strtolower($phrase)) . "\n";
echo ucwords(strtolower($phrase)) . "\n";

// Finding and extracting substrings
$pos = strpos($phrase, 'strings');
echo $pos !== false ? "Found at $pos\n" : "Not found\n";
echo substr($phrase, $pos, 7) . "\n";

// Replacements and repeats
echo str_replace('powerful', 'versatile', $phrase) . "\n";
echo str_repeat($greeting . ' ', 3) . "\n";

// Splitting and joining strings
$words = explode(' ', trim($sentence));
print_r($words);
echo implode('-', $words) . "\n";

// Access characters dynamically
echo $phrase[4] . "\n";
echo $phrase[strlen($phrase) - 2] . "\n";

// Escaping and HTML handling
$raw = "This is a \"quote\" and a <b>tag</b>.";
echo addslashes($raw) . "\n";
echo htmlspecialchars($raw) . "\n";

// Convert newlines to <br> tags
$multiline = "Line one\nLine two\nLine three";
echo nl2br($multiline) . "\n";

// Comparing strings precisely
echo strcmp("PHP", "php") . "\n";  // case-sensitive
echo strcasecmp("PHP", "php") . "\n"; // case-insensitive

// ASCII conversions
echo chr(80) . "\n";  // P
echo ord('P') . "\n"; // 80

// Hashing example (md5)
$password = "securePass123";
echo md5($password) . "\n";

// Conditional substring search example
if (stripos($phrase, "Powerful") !== false) {
    echo "Substring found (case-insensitive)\n";
} else {
    echo "Substring not found\n";
}

?>
