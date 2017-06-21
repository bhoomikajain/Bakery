(function($){
$(document).ready(function(){
	$(".user_profile").validate({
		rules: {
			uname: "required",
			contact: {
				required: true,
				maxlength: 10,
				number: true
			},
			email: {
				required: true,
				email: true
			}
		},

		messages: {
			uname: " Please enter the username",
			contact: {
				required: " Please enter a contact number",
				maxlength: " Please enter a valid contact number",
				number: " Please enter a valid contact number"
			},
			email: {
				required: " Please enter an email address",
				email: " Please enter a valid email address"
			}
		},

		submitHandler: function(form) {
			form.submit();
		}
	});
	$(".contact").keypress(function (e) {
		var sample="`!@#$%^&*()"
        if((e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 97 && e.keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode)) {
        	return false;
        }     
	});
});
})(jQuery);