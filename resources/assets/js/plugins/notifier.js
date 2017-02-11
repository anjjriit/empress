require('materialize-notify');

Notifier = {
	init: function(message, title, level = null, icon = null, location = 'right') {
		this.message = message;
		
		if (level !== null) {
			this.level = level;
			this.title = title;
		} else {
			this.level = title;
			this.title = null;
		}
		
		if (icon) {
			this.icon = icon;
		} else {
			this.icon();
		}

		this.location = location;

		this.run();
	},
	icon: function() {
        switch (this.level) {
            case 'success':
                this.icon = 'done_all';
                break;
            case 'danger':
                this.icon = 'report_problem';
                break;
            case 'info':
                this.icon = 'info_outline';
                break;
            case 'warning':
                this.icon = 'error_outline';
                break;
            case 'default':
            case 'inverse':
            case 'primary':
            case 'rose':
                this.icon = 'notifications';
                break;
        }
	},
	template: function() {
		// you can add your own template here if you need to.
	},
	run: function() {
		$.notify({
            icon: Notifier.icon,
            title: Notifier.title,
            message: Notifier.message,
        },{
            type: Notifier.level,
            timer: 500000,
            //template: Notifier.template(); // uncomment if you've added a template above.
        });
	}
};

module.exports = Notifier;
