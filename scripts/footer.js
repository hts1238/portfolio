$(function() {
	$("footer input#theme").on("change", function() {
		let new_theme = "light";
		if ($("footer input#theme").prop("checked")) {
			new_theme = "dark";
		}
		$.ajax({
			type: "POST",
			url: "processing/change_theme.php",
			data: "theme=" + new_theme,
			success: function(e) {
				location.reload(true);
			}
		});
	});
});