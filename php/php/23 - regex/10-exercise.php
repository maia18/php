<?php
header('Content-Type: text/plain');

echo "-------\nTask 1:\n";

// Task 1: 
// Convert the ISO date format (yyyy-mm-dd) to the U.S. format (mm/dd/yyyy).
// 
// The rest of the sentence should remain as it is, only the date value 
// should be exchanged.
// 
// If there is no ISO date format, the sentence should remain 
// as it is.

$task1 = [
    "I was born on 1990-03-04",
    "My birthday is the 03/04/1990",
    "The first man landed on the moon on 1969-07-20",
    "The first iPhone was released on 2007-06-29",
];

foreach($task1 as $x) {
    var_dump($x);
}



echo "-------\nTask 2:\n";
// Task 2: 
//
// Tip: Please note that you need to escape the @ symbol in the pattern 
//      (the first parameter of preg_replace or preg_match) with a 
//      backslash.
// 
// Extract all email addresses from the following texts:
$texts = [
    "Hello asdfaf@web.com",
    "I am another email address: asdfasdf@gmail.com",
    "And this is not an email address: Let's meet at 8 o'clock@Times Square"
];
foreach($texts AS $text) {

}



echo "\n-------\nTask 3:\n";
// Task 3
//
// In a text, all links should be replaced with hyperlinks.
// For example, from:
// "Hello, this is a link to Google: https://google.com" 
// it should become:
// "Hello, this is a link to Google: <a href='https://google.com'>https://google.com</a>"
//
// Tip: Please note that you need to escape the slashes "//" in the pattern (first
//      parameter of preg_replace or preg_match), so you might need to add a backslash 
//      (\) in front of them.
// 
$text = "Hello, this is a link to Google: https://google.com.\n" . 
  "And this is a link to Facebook: https://facebook.com";




echo "-------\nTask 4:\n";
// Task 4
// We want to check our database for duplicate email addresses.
// 
// 1) Some email providers offer their users multiple domains.
// Therefore, replace every @googlemail.com with @gmail.com.
//
// 2) In addition, for @gmail.com addresses, everything after the plus
// is ignored (but only for @gmail.com / @googlemail.com
// addresses). Everything after the plus should thus be removed for 
// @gmail.com addresses.
//
// Example:
//   john+doe@googlemail.com -> john+doe@gmail.com -> john@gmail.com
// 
// You may use several preg_replace in a row for these two tasks. You
// can also use a simple str_replace for parts of this exercise.
//
// Tip: Please note that you need to escape the + symbol in the pattern 
//      (the first parameter of preg_replace or preg_match) with a backslash. 
//      Otherwise, it might get understood as a quantifier.

$emails = [
    "samplemail@web.com",
    "john@gmail.com",
    "john@googlemail.com",
    "world+john@gmail.com",
    "jane.doe@serviceprovider.com",
    "email@googlemail.com",
    "jane+doe@gmail.com",
    "world@gmail.com"
];

foreach($emails AS $email) {
    // Write your code here
    var_dump($email);
}
