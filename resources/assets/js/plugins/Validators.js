require('jquery-validation');

Validators = {

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
	},
	login: function() {
		$('#login-form').validate({
	        rules: {
	            login: 'required',
	            password: 'required'
	        },
	        messages: {
	            login: {
	                required: 'Username or Email is required.',
	            },
	            password: {
	                required: 'Password is required.'
	            }
	        }
	    });
	},
	register: function() {
		$('#register-form').validate({
	        rules: {
	            username: 'required',
	            name: 'required',
	            email: {
	                required: true,
	                email: true,
	                maxlength: 180
	            },
	            password: {
	                required: true,
	                minlength: 6
	            },
	            password_confirmation: {
	                required: true,
	                equalTo: '#password'
	            }
	        },
	        messages: {
	            username: 'Please create a username.',
	            name: 'Please enter your name.',
	            email: {
	                required: 'Please enter your email address.',
	                email: 'Must be a valid email address.',
	                maxlength: 'Max length for an email is 180 characters.'
	            },
	            password: {
	                required: 'Please create a password.',
	                minlength: 'Password must be at least 6 characters.'
	            },
	            password_confirmation: {
	                required: 'Please confirm your password.',
	                equalTo: 'Your passwords must match.'
	            }
	        }
	    });
	},
	email: function() {
		$('#forgot-form').validate({
	        rules: {
	            email: {
	                required: true,
	                email: true
	            }
	        },
	        messages: {
	            email: {
	                required: 'Your email address is required.',
	                email: 'Must be a valid email address.'
	            }
	        }
	    });
	},
	password: function() {
		$('#reset-form').validate({
	        rules: {
	            email: {
	                required: true,
	                email: true
	            },
	            password: {
	                required: true,
	                minlength: 6
	            },
	            password_confirmation: {
	                required: true,
	                equalTo: '#password'
	            }

	        },
	        messages: {
	            email: {
	                required: 'Your email address is required.',
	                email: 'Must be a valid email address.'
	            },
	            password: {
	                required: 'A new password is required.',
	                minlength: 'Password must be at least 6 characters.'
	            },
	            password_confirmation: {
	                required: 'Please confirm your password.',
	                equalTo: 'Your passwords must match.'
	            }
	        }
	    });
	},
	page: function(form) {
    	$(form).validate({
    		rules: {
    			title: 'required',
    			slug: 'required',
    			content: 'required'
    		},	
    		messages: {
    			title: 'Please enter a Title.',
    			slug: 'Please enter a Slug.',
    			content: 'Please enter some Content.'
    		}
    	});
    },
    permission: function(form) {
    	$(form).validate({
			rules: {
	            name: 'required',
	            roles: 'required'
	        },
	        messages: {
	            name: 'Please enter a Name.',
	            roles: 'Please select at least one Role.'
	        }
		});
    },
    role: function(form) {
    	$(form).validate({
	        rules: {
	            name: 'required'
	        },
	        messages: {
	            name: 'Please enter a Name.'
	        }
	    });
    },
    user: function(form) {
    	$(form).validate({
	        rules: {
	            username: 'required',
	            name: 'required',
	            email: {
	                required: true,
	                email: true,
	                maxlength: 180
	            },
	            roles: 'required'
	        },
	        messages: {
	            username: 'Please create a username.',
	            name: 'Please enter a name.',
	            email: {
	                required: 'Please enter an email address.',
	                email: 'Must be a valid email address.',
	                maxlength: 'Max length for an email is 180 characters.'
	            },
	            roles: 'Please select at least one role.'
	        }
	    });
    },
    settings: function(form) {
    	$('#settings-edit').validate({
	        rules: {
	            username: 'required',
	            name: 'required',
	            email: {
	                required: true,
	                email: true,
	                maxlength: 180
	            }
	        },
	        messages: {
	            username: 'Please enter a username.',
	            name: 'Please enter a name.',
	            email: {
	                required: 'Please enter an email address.',
	                email: 'Must be a valid email address.',
	                maxlength: 'Max length for an email is 180 characters.'
	            }
	        }
	    });
    },
    password_change: function() {
    	$('#password-edit').validate({
    		rules: {
    			password: {
	                required: true
	            },
	            new_password: {
	            	required: true,
	                minlength: 6
	            },
	            new_password_confirmation: {
	                required: true,
	                equalTo: '#new_password'
	            }
    		},
    		messages: {
    			password: {
	                required: 'Please enter your current password.'
	            },
	            new_password: {
	            	required: 'Please create a new password.',
	                minlength: 'Password must be at least 6 characters.'
	            },
	            new_password_confirmation: {
	                required: 'Please confirm your new password.',
	                equalTo: 'Your passwords must match.'
	            }
    		}
    	});
    }
}

Validators.initialize();

module.exports = Validators;
