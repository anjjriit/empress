<?php 

/**
 * app/Models/Traits/Reactivatable.php
 *
 * Trait for sending a reconfirm email for account settings.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Models\Traits;

use Carbon\Carbon;
use Empress\Notifications\ConfirmUserEmail;

/**
 * Local trait for activating users.
 */
trait Reactivatable
{
    /**
     * Send the confirmation notification after created event.
     * 
     * @return void
     */
    public function sendNotification()
    {
        $this->activation_token = str_random(64);
        $this->activated_at = null;
        $this->save();

        $this->notify(new ConfirmUserEmail());
    }

    /**
     * Set the email for the notification.
     * 
     * @return string
     */
    public function routeNotificationForMail()
    {
        return $this->email;
    }

    /**
     * Mutate the activated_at column.
     * 
     * @return boolean
     */
    public function getActivatedAttribute()
    {
        return ($this->activated_at !== null);
    }
}
