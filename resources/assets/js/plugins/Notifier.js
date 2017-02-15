require('materialize-notify');

Notifier = {
	
	run: function(message, title, level = null, icon = null, location = 'right') {
		this.message = message;
		
		if (level) {
			this.level = level;
			this.title = title;
		} else {
			this.level = title;
			this.title = null;
		}
		
		if (icon) {
			this.icon = icon;
		} else {
			this.setIcon();
		}

		this.location = location;
		
		this.render();
	},
	setIcon: function() {
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
	render: function() {
		$.notify({
            icon: Notifier.icon,
            title: Notifier.title,
            message: Notifier.message,
        },{
            type: Notifier.level,
            timer: 5000,
            //template: this.template(); // uncomment if you've added a template above.
        });
	}
};

module.exports = Notifier;