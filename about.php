<?php
	$theme = $_COOKIE["theme"] ?? "light";
    include_once("paths.php");
	include_once(TEMPLATES_FOLDER."header.html");
	include_once(TEMPLATES_FOLDER."theme_colors.html");
	include_once(TEMPLATES_FOLDER."about.html");
	include_once(TEMPLATES_FOLDER."footer.php");
?>