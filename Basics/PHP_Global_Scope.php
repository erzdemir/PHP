// Demonstrating global scope in PHP
<?php

// Demonstrating global scope in PHP
$name = "John";

// Demonstrating global scope in PHP
function getName() {
// Demonstrating global scope in PHP
	global $name; 
	//$name = "Jack";
// Demonstrating global scope in PHP
	echo $name;
// Demonstrating global scope in PHP
}

// Demonstrating global scope in PHP
echo $name . "<br>";
// Demonstrating global scope in PHP
getName();