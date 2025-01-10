CONCATENATION.
<?php
// Define two numeric variables
$num1 = 10;
$num2 = 3;

// Perform arithmetic operations and concatenate the results into strings
$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$modulus = $num1 % $num2;

// Concatenate strings with the results
$resultString = "Results of operations between $num1 and $num2:\n" .
                "Addition: " . $num1 . " + " . $num2 . " = " . $addition . "\n" .
                "Subtraction: " . $num1 . " - " . $num2 . " = " . $subtraction . "\n" .
                "Multiplication: " . $num1 . " * " . $num2 . " = " . $multiplication . "\n" .
                "Division: " . $num1 . " / " . $num2 . " = " . $division . "\n" .
                "Modulus: " . $num1 . " % " . $num2 . " = " . $modulus . "\n";

// Output the concatenated string
echo $resultString;
?>

STRING LENGTH .
<?php
// Define a string variable
$string = "Hello, World!";

// Get the length of the string
$stringLength = strlen($string);

// Output the string and its length
echo "The string is: \"$string\"\n";
echo "The length of the string is: $stringLength characters.\n";
?>

SUBSTRING EXTRACTION.
<?php
// Define a string variable
$string = "Hello, World!";

// Get the length of the string
$stringLength = strlen($string);

// Output the string and its length
echo "The string is: \"$string\"\n";
echo "The length of the string is: $stringLength characters.\n";
?>

CASE CONVERSATION -ALL 4 TYPES.
<?php
// Define a string variable
$string = "hello, world! welcome to PHP programming.";

// Convert to uppercase
$uppercase = strtoupper($string);

// Convert to lowercase
$lowercase = strtolower($string);

// Convert to title case (first letter of each word capitalized)
$titlecase = ucwords($string);

// Convert to toggle case (uppercase to lowercase and vice versa)
$togglecase = '';
for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];
    if (ctype_upper($char)) {
        $togglecase .= strtolower($char);
    } else {
        $togglecase .= strtoupper($char);
    }
}

// Output the original string and the converted cases
echo "Original string: \"$string\"\n";
echo "Uppercase: \"$uppercase\"\n";
echo "Lowercase: \"$lowercase\"\n";
echo "Title Case: \"$titlecase\"\n";
echo "Toggle Case: \"$togglecase\"\n";
?>

TRIMMING -ALL 3 TYPES
<?php
// Original string with whitespace
$string = "   Hello, World!   ";

// Using trim() to remove whitespace from both ends
$trimmed = trim($string);
echo "Trimmed: '" . $trimmed . "'\n"; // Output: 'Hello, World!'

// Using ltrim() to remove whitespace from the left end
$ltrimmed = ltrim($string);
echo "Left Trimmed: '" . $ltrimmed . "'\n"; // Output: 'Hello, World!   '

// Using rtrim() to remove whitespace from the right end
$rtrimmed = rtrim($string);
echo "Right Trimmed: '" . $rtrimmed . "'\n"; // Output: '   Hello, World!'
?>
 reverse a string
<?php
// Original string
$string = "Hello, World!";

// Reversing the string
$reversedString = strrev($string);

// Output the reversed string
echo "Original String: " . $string . "\n"; // Output: Hello, World!
echo "Reversed String: " . $reversedString . "\n"; // Output: !dlroW ,olleH
?>
case sentitive.
<?php
// Define two strings
$string1 = "Hello, World!";
$string2 = "hello, world!";

// Compare the strings using strcmp()
$result = strcmp($string1, $string2);

// Check the result of the comparison
if ($result === 0) {
    echo "The strings are equal (case-sensitive).\n";
} elseif ($result < 0) {
    echo "The first string is less than the second string (case-sensitive).\n";
} else {
    echo "The first string is greater than the second string (case-sensitive).\n";
}
?>
case insetitive.
<?php
// Define two strings
$string1 = "Hello, World!";
$string2 = "hello, world!";

// Compare the strings using strcasecmp()
$result = strcasecmp($string1, $string2);

// Check the result of the comparison
if ($result === 0) {
    echo "The strings are equal (case-insensitive).\n";
} elseif ($result < 0) {
    echo "The first string is less than the second string (case-insensitive).\n";
} else {
    echo "The first string is greater than the second string (case-insensitive).\n";
}
?>


