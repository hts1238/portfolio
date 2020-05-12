<?php

$name = $_POST["name"];
$surname = $_POST["surname"];
$class = $_POST["class"];
$isstudent = $_POST["isstudent"];
$agree = $_POST["agree"];

if ($isstudent != "on" || $agree != "on" || strlen($name) == 0 || strlen($surname) == 0 || strlen($class) == 0) {
	die("Are you really want it?");
}

echo "All data is valid";