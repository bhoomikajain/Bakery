(function($){
$(document).ready(function(){
	$(".user_address").validate({
		rules: {
			fname: "required",
			lname: "required",
			mobileno: {
				required: true,
				maxlength: 10,
				number: true
			},
			altno: {
				maxlength: 10,
				number: true
			},
			houseno: "required",
			street: "required",
			pincode: {
				required: true,
				maxlength: 6,
				number: true
			},
			city: "required",
			state: "required",
			country: "required"
		},

		messages: {
			fname: "<br> First Name is required.",
			lname: "<br> Last Name is required.",
			mobileno: {
				required: "<br> Mobile Number is required.",
				maxlength: "<br> Please enter a valid mobile number.",
				number: "<br> Please enter a valid mobile number."
			},
			altno: {
				maxlength: "<br> Please enter a valid mobile number.",
				number: "<br> Please enter a valid mobile number."
			},
			houseno: "<br> Required.",
			street: "<br> Required.",
			pincode: {
				required: "<br> Pincode is required.",
				maxlength: "<br> Please enter a valid pincode.",
				number: "<br> Please enter a valid pincode."
			},
			city: "<br> City is required.",
			state: "<br> State is required.",
			country: "<br> Country is required."

		},

		submitHandler: function(form) {
			form.submit();
		}
	});
	$(".mobileno").keypress(function (e) {
		var sample="`!@#$%^&*()"
        if((e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 97 && e.keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode)) {
        	return false;
        }     
	});
	$(".altno").keypress(function (e) {
		var sample="`!@#$%^&*()"
        if((e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 97 && e.keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode)) {
        	return false;
        }     
	});
	$(".pincode").keypress(function (e) {
		var sample="`!@#$%^&*()"
        if((e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 97 && e.keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode)) {
        	return false;
        }     
	});
});
})(jQuery);