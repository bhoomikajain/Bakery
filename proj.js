(function($){
$(document).ready(function(){
	$("#registerform").validate({
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
			},
			pwd: {
				required: true,
				minlength: 8
			},
			rpwd: {
				required: true,
				minlength: 8,
				equalTo: "#pwd"
			},
			agree: "required"
		},

		messages: {
			uname: "Please enter the username",
			contact: {
				required: "Please enter a contact number",
				maxlength: "Please enter a valid contact number",
				number: "Please enter a valid contact number"
			},
			email: {
				required: "Please enter an email address",
				email: "Please enter a valid email address"
			},
			agree: "Please accept our policy",
			pwd: {
				required: "Please enter a password",
				minlength: "The password should be at least 8 characters in length"
			},
			rpwd: {
				required: "Please re-enter the password",
				minlength: "The password should be at least 8 characters in length",
				equalTo: "Please enter the same password as above"
			}

		},

		submitHandler: function(form) {
			form.submit();
		}
	});

	$("#login").validate({
		rules: {
			emailno: "required",
			pwrd: {
				required: true,
				minlength: 8
			},
		},

		messages: {
			emailno: "Please enter the email address or contact number",
			pwrd: {
				required: "Please enter a password",
				minlength: "The password must be at least 8 characters in length"
			},
		},

		// submitHandler: function(form) {
		// 	form.submit();
		// }
	});

	$("#contact").keypress(function (e) {
		var sample="`!@#$%^&*()"
        if((e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 97 && e.keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode)) {
        	return false;
        }     
	});
	$("#signup").click(function() {
		$("#main").show();
		$("#main2").hide();
		$(this).css("background-color", "lightblue");
		$("#signin").css("background-color", "lightgray");
	});
	$("#signin").click(function() {
		$("#main2").show();
		$("#main").hide();
		$(this).css("background-color", "lightblue");
		$("#signup").css("background-color", "lightgray");
	});
	$("#signinbutton").click(function(event) {
		event.preventDefault();
		$("#main2").show();
		$("#main").hide();
		$("#signin").css("background-color", "lightblue");
		$("#signup").css("background-color", "lightgray");
	});

});
})(jQuery);