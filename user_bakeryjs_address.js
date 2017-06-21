(function($){
$(document).ready(function(){

function cancel() {
	$.ajax({
		method: 'POST',
		url: 'http://localhost/BAKERY/ajax_address_cancel.php',
		data: {action: 'call_this'},
		success: Function('Done')
	});
}

});
})(jQuery);