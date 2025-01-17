FEEDBACK FORM
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title> Feedback From</title>
    </head>
    <>
        <h1>Feedback From</h1>
        <form id="name">Name:</label><br>
        <input type="text"id="name" name="name"Required><br><br>

        <label for="mobile">Mobile Number:</label><br>
        <input type=""tel" id="mobile"name="mobile" pattern="[0-9]{10}"required><br><br>

        <label for="email">Email:</label><br>
        <input type="email"id="email" name="email"required><br><br>

        <label for="message">Message"</label><br>
        <textarea id="message"name="message"rows="4"reqired></textarea><br><br>

        <button type="button"onclick="submitForm()">Submit</button>
        </form>
        <script>
            function submitForm(){
                const name=document.getElememtByld('name').value;
                const mobile=document.getElementByld('mobile').value;
                const email=document.getElementByld('email').value;
                const message=document.getElementByld('message').value;

                const feedbackData={
                    name:name,
                    mobile:mobile,
                    email:email,
                    message:message,
                };
                localStorage.setltem('feedbackData',JSON.stringify(feedbackData));
                window.location.href='submitted_feedback.html';
            }
            </script>

            
                        
        
    </body>
</html>

SUM OF ALL EVEN NO.
<?php
// Initialize the sum variable
$sum = 0;

// Loop through numbers from 1 to 100
for ($i = 1; $i <= 100; $i++) {
    // Check if the number is even
    if ($i % 2 == 0) {
        // Add the even number to the sum
        $sum += $i;
    }
}

// Output the result
echo "The sum of all even numbers between 1 and 100 is: " . $sum;
?>

STRING IS PALINDROME OR NOT.
<?php

function isPalindrome($string) {
    // Remove spaces and convert to lowercase
    $cleanedString = preg_replace("/[^A-Za-z0-9]/", "", strtolower($string));
    
    // Reverse the cleaned string
    $reversedString = strrev($cleanedString);
    
    // Check if the cleaned string is the same as the reversed string
    return $cleanedString === $reversedString;
}

// Example usage
$inputString = "A man, a plan, a canal, Panama";
if (isPalindrome($inputString)) {
    echo "'$inputString' is a palindrome.";
} else {
    echo "'$inputString' is not a palindrome.";
}
?>

populations.
<?php
// Create an associative array of cities and their populations
$cities = [
    "New York" => 8419600,
    "Los Angeles" => 3980400,
    "Chicago" => 2716000
];

// Initialize variables to track the city with the highest population
$highestPopulationCity = '';
$highestPopulation = 0;

// Loop through the associative array to find the city with the highest population
foreach ($cities as $city => $population) {
    if ($population > $highestPopulation) {
        $highestPopulation = $population;
        $highestPopulationCity = $city;
    }
}

// Print the city with the highest population
echo "The city with the highest population is: " . $highestPopulationCity . " with a population of " . $highestPopulation;
?>