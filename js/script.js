$(document).ready(function() {	
	if ($('#features').is(':visible')) {
		setTimeout(function() {
			$('#features img').addClass('anim');
		}, 1500);
	});
	if ($('#contact').is(':visible')) {
		setTimeout(function() {
			$('#contact img').addClass('flip');
		}, 1500);
	});
});