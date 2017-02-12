/**
 * resources/assets/js/plugins/Notifier.js
 *
 * Notifier for access the Materialize-Notifier package.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

import notify from 'materialize-notify';

class Notifier {
	/**
	 * Build up the notification.
	 * 
	 * @param  {string} message
	 * @param  {string} title
	 * @param  {string} level
	 * @param  {string} icon
	 * @param  {string} location
	 * @return Notify
	 */
	run(message, title, level = null, icon = null, location = 'right') {
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
	}

	/**
	 * Set the icon if one isn't passed in.
	 * 
	 * @return {string}
	 */
	setIcon() {
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
	}

	/**
	 * Add your own template if you need.
	 * 
	 * @return {string}
	 */
	template() {
		// you can add your own template here if you need to.
	}

	/**
	 * Render the Notification.
	 * 
	 * @return Notify
	 */
	render() {
		$.notify({
            icon: this.icon,
            title: this.title,
            message: this.message,
        },{
            type: this.level,
            timer: 5000,
            //template: this.template(); // uncomment if you've added a template above.
        });
	}
}

export default new Notifier;
