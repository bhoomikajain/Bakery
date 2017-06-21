(function($){
$(document).ready(function(){
	$(".submitadd").validate({
		rules: {
			name: "required",
			weight: "required",
			price: "required"
		},

		messages: {
			name: "<br>Please enter the name of the cake",
			weight: "<br>Please enter the weight in pounds",
			price: "<br>Please enter the price in Rupees"
		}

		// submitHandler: function(form) {
		// 	form.submit();
		// }
	});

	$(".submitedit").click(function(){
		$(".editcake_text").prop({disabled: false});
		$(".editweight_text").prop({disabled: false});
		$(".editprice_text").prop({disabled: false});
		$("#fileToUpload").prop({disabled: false});
		$("#submitimage").prop({disabled: false});
		$(".savechanges").prop({disabled: false});
	});

});
})(jQuery);