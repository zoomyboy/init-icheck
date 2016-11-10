$(document).ready(function() {
	$('.iCheck').each(function() {
		var style = $(this).data('style');
		var color = ($(this).data('color')) ? '-' + $(this).data('color') : '';
		$(this).iCheck({
			checkboxClass: 'icheckbox_' + style + color
		});
	});
});
