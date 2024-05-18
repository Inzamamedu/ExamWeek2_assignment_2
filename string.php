<?php
// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count the number of vowels in a string
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    $string = strtolower($string);
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count the number of vowels in the string
    $vowelCount = countVowels($string);
    
    // Reverse the string
    $reversedString = strrev($string);
    
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString","</br>";
    

}
?>