<?php
	$theme = $_COOKIE["theme"] ?? "light";
	include_once("paths.php");
	include_once(TEMPLATES_FOLDER."header.html");
	include_once(TEMPLATES_FOLDER."theme_colors.html");
	include_once(TEMPLATES_FOLDER."feedback.html");
	include_once(PHP_SCRIPTS_FOLDER."viewfeedbacks.php");
	include_once(TEMPLATES_FOLDER."footer.php");
?>
