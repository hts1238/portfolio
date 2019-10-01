<?php
    include_once("../paths.php");
	setcookie("theme", $_POST["theme"], time() + 31536000, COOKIES_PLACE);
?>