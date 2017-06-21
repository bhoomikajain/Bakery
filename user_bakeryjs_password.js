(function($){
$(document).ready(function(){
	$(".user_changepwd").validate({
		rules: {
			old: {
				required: true
			},
			new: {
				required: true,
				minlength: 8
			},
			confirm: {
				required: true,
				minlength: 8,
				equalTo: ".new"
			}
		},

		messages: {
			old: {
				required: "<br>Old password is required."
			},
			new: {
				required: "<br>New password is required.",
				minlength: "<br>The password should be at least 8 characters in length."
			},
			confirm: {
				required: "<br>Please re-enter the new password.",
				minlength: "<br>The password should be at least 8 characters in length.",
				equalTo: "<br>Please enter the same password as above."
			}

		},

		submitHandler: function(form) {
			form.submit();
		}
	});

});
})(jQuery);