<!Doctype html>
<html>
<body>

<?php
function myTest() {
$x = 5; // local scope
    echo "<p>variable x inside fuction is: $x </p>";
}
myTest();

// using x inside this function will generate an error
echo "<p>variable x outside function is: $x </p>";
?>

<body>
<html>