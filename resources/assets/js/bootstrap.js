/*
|--------------------------------------------------------------------------
| Import all of our needed modules.
|--------------------------------------------------------------------------
*/
import Lodash from 'lodash';
import jQuery from 'jquery';
import MaterializeCss from 'materialize-css';
import Notifier from './plugins/Notifier';
import Form from './plugins/Form';
import Vue from 'vue';
import Axios from 'axios';
//import Echo from "laravel-echo";



/*
|--------------------------------------------------------------------------
| Assign all of our packages to the window object.
|--------------------------------------------------------------------------
*/

window._                 = Lodash;
window.$ = window.jQuery = jQuery;
window.Materialize       = MaterializeCss;
window.Notifier          = Notifier;
window.Form              = Form;
window.Vue               = Vue;
window.axios             = Axios;

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

require('jquery-validation');
require('./plugins/ValidatorDefaults');

/*
|--------------------------------------------------------------------------
| Set Up Echo for Broadcasting
|--------------------------------------------------------------------------
|
| Echo exposes an expressive API for subscribing to channels and listening
| for events that are broadcast by Laravel. Echo and event broadcasting
| allows your team to easily build robust real-time web applications.
|
*/

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });
