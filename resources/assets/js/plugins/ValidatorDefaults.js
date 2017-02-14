require('jquery-validation');

ValidatorDefaults = {

	initialize: function() {
		
		$.validator.setDefaults({
		    errorClass: 'invalid',
		    validClass: "valid",
		    errorPlacement: function (error, element) {
		        $(element)
		            .closest("form")
		            .find("label[for='" + element.attr("id") + "']")
		            .attr('data-error', error.text());
		    }
		});
	}
}

ValidatorDefaults.initialize();

module.exports = ValidatorDefaults;
