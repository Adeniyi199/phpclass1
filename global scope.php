<!Doctype html>
<html>
<body>

<?php
$x = 5; // global scope
function myTest() {
    // using x inside this function will generate an error
    echo "<p>variable x inside fuction is: $x </p>";
}
myTest();

echo "<p>variable x outside function is: $x </p>";
?>

<body>
<html>