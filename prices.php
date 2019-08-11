<?php
	$theme = $_COOKIE["theme"] ?? "light";
	include_once("templates/header.html");
	include_once("templates/theme_colors.html");
	include_once("templates/footer.php");
?>