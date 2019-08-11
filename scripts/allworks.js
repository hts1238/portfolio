function load(str) {
	$("main#allworks div#sections").load("http://localhost/prog/portfolio/processing/projects.php?str=" + str);
}

$(function() {
	load("popular");

	const $allworks = $("main#allworks div#menu_sections");

	$allworks.on("click", function(event) {
		let $element = event.target;
		let $active = $("main#allworks div#menu_sections > div#active")[0];
		if (event.target.tagName === "H2") {
			$element = event.target.parentElement;
		}

		$active.id = "";
		$element.id = "active";

		if ($element.innerText === "Most popular") {
			load("popular");
		}
		if ($element.innerText === "All projects") {
			load("allworks");
		}
		if ($element.innerText === "In developing") {
			load("develop");
		}
	});
});