$(function() {
	let form = $("main#feedback form");
	form.on("submit", function() {
		let feedback = document.new_feedback.feedback.value;
		console.log(feedback);
	});
});
