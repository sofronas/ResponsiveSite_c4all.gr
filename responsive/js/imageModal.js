$(document).ready(function () {
	var img = document.getElementById('coverImage');
	var modal = document.getElementById('imagemodal');

	// console.log(img);
	// console.log(modal);
	$('#coverImageToLoad').click(function () {
		$(modal).modal('show'); 
	});
});