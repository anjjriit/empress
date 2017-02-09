(function (factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as an anonymous module.
		define(['jquery'], factory);
	} else if (typeof exports === 'object') {
		// Node/CommonJS
		factory(require('jquery'));
	} else {
		// Browser globals
		factory(jQuery);
	}
}(function ($) {
	window.Notifier = {
		init: function(message, level, icon = 'notifications', location = 'right', title = '') {
			this.message  = message;
			this.level    = level;
			this.icon     = icon;
			this.location = location;
			this.title    = title;

			this.fire();
		},
		template: function() {
			return '<div class="col s11 m5 l4 center alert alert-{0} alert-with-icon" data-notify="container">' +
	            '<i class="material-icons" data-notify="icon"></i>' +
	            '<button type="button" aria-hidden="true" data-notify="dismiss" class="close waves-effect waves-light waves-circle">' +
	                '<i class="material-icons">close</i>' +
	            '</button>' +
	            '<span data-notify="title">{1}</span>' +
	            '<span data-notify="message"><p>{2}</p></span>'+
	        '</div>';
		},
		fire: function() {
			return $.notify({
	            icon: Notifier.icon,
	            title: Notifier.title,
	            message: Notifier.message,
	        },{
	            type: Notifier.level,
	            timer: 5000,
	            placement: {
	                from: "top",
	                align: Notifier.location
	            },
	            animate: {
	                enter: 'animated bounceInDown',
	                exit: 'animated bounceOutUp'
	            },
	            offset: 65,
	            allow_dismiss: true,
	            template: Notifier.template()
	        });
		}
	};
}));