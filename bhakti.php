<?php
// Function to perform arithmetic operations
function performArithmetic($num1, $num2) {
    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = ($num2 != 0) ? $num1 / $num2 : "Division by zero error";
    $modulus = ($num2 != 0) ? $num1 % $num2 : "Division by zero error";
    

    return [
        'addition' => $addition,
        'subtraction' => $subtraction,
        'multiplication' => $multiplication,
        'division' => $division,
        'modulus' => $modulus,
        
    ];
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;

    // Perform the arithmetic operations
    $results = performArithmetic($num1, $num2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators in PHP</title>
</head>
<body>
    <h1>Arithmetic Operations</h1>
    <form method="post" action="">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" required>
        <br>
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" required>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Display the results if available
    if (isset($results)) {
        echo "<h2>Results:</h2>";
        echo "Addition: " . $results['addition'] . "<br>";
        echo "Subtraction: " . $results['subtraction'] . "<br>";
        echo "Multiplication: " . $results['multiplication'] . "<br>";
        echo "Division: " . $results['division'] . "<br>";
        echo "Modulus: " . $results['modulus'] . "<br>";
        
    }
    ?>
</body>
</html>
ROUND UP TO NEAREST INTEGER.
<?php
// Function to round up a number from a string
function roundUpFromString($numberString) {
    // Convert the string to a float
    $number = floatval($numberString);
    
    // Round up to the nearest integer
    $roundedUp = ceil($number);
    
    return $roundedUp;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numberString = isset($_POST['number']) ? $_POST['number'] : '';

    // Round up the number
    $result = roundUpFromString($numberString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round Up to Nearest Integer</title>
</head>
<body>
    <h1>Round Up to Nearest Integer</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="text" name="number" required>
        <br>
        <input type="submit" value="Round Up">
    </form>

    <?php
    // Display the result if available
    if (isset($result)) {
        echo "<h2>Rounded Up Result: $result</h2>";
    }
    ?>
</body>
</html>
ROUND DOWN TO NEAREST INTEGER.
<?php
// Function to round down a number from a string
function roundDownFromString($numberString) {
    // Convert the string to a float
    $number = floatval($numberString);
    
    // Round down to the nearest integer
    $roundedDown = floor($number);
    
    return $roundedDown;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numberString = isset($_POST['number']) ? $_POST['number'] : '';

    // Round down the number
    $result = roundDownFromString($numberString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Round Down to Nearest Integer</title>
</head>
<body>
    <h1>Round Down to Nearest Integer</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="text" name="number" required>
        <br>
        <input type="submit" value="Round Down">
    </form>

    <?php
    // Display the result if available
    if (isset($result)) {
        echo "<h2>Rounded Down Result: $result</h2>";
    }
    ?>
</body>
</html>
ROUND SQUARE round
<?php
// Function to calculate the square root from a string
function calculateSquareRoot($numberString) {
    // Convert the string to a float
    $number = floatval($numberString);
    
    // Check if the number is non-negative
    if ($number < 0) {
        return "Error: Cannot calculate the square root of a negative number.";
    }
    
    // Calculate the square root
    $squareRoot = sqrt($number);
    
    return $squareRoot;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numberString = isset($_POST['number']) ? $_POST['number'] : '';

    // Calculate the square root
    $result = calculateSquareRoot($numberString);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Square Root</title>
</head>
<body>
    <h1>Calculate Square Root</h1>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="text" name="number" required>
        <br>
        <input type="submit" value="Calculate Square Root">
    </form>

    <?php
    // Display the result if available
    if (isset($result)) {
        echo "<h2>Square Root Result: $result</h2>";
    }
    ?>
</body>
</html>
$MIN &$MAX
<?php
// Function to generate a random number between min and max
function generateRandomNumber($min, $max) {
    // Ensure min is less than max
    if ($min > $max) {
        return "Error: Minimum value must be less than or equal to maximum value.";
    }
    
    // Generate a random number between min and max
    $randomNumber = mt_rand($min, $max);
    
    return $randomNumber;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $min = isset($_POST['min']) ? intval($_POST['min']) : 0;
    $max = isset($_POST['max']) ? intval($_POST['max']) : 0;

    // Generate the random number
    $result = generateRandomNumber($min, $max);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Random Number</title>
</head>
<body>
    <h1>Generate a Random Number</h1>
    <form method="post" action="">
        <label for="min">Minimum Value:</label>
        <input type="number" name="min" required>
        <br>
        <label for="max">Maximum Value:</label>
        <input type="number" name="max" required>
        <br>
        <input type="submit" value="Generate Random Number">
    </form>

    <?php
    // Display the result if available
    if (isset($result)) {
        echo "<h2>Random Number: $result</h2>";
    }
    ?>
</body>
</html>
CHECKS VAKUES IS NUMERIC OR NOT.
<?php
// Function to check if the value is numeric
function checkIfNumeric($value) {
    if (is_numeric($value)) {
        return "Success: The value '$value' is numeric.";
    } else {
        return "Error: The value '$value' is not numeric.";
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value = isset($_POST['value']) ? $_POST['value'] : '';

    // Check if the value is numeric
    $result = checkIfNumeric($value);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Numeric Value</title>
</head>
<body>
    <h1>Check if Value is Numeric</h1>
    <form method="post" action="">
        <label for="value">Enter a value:</label>
        <input type="text" name="value" required>
        <br>
        <input type="submit" value="Check Value">
    </form>

    <?php
    // Display the result if available
    if (isset($result)) {
        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>