/*
|--------------------------------------------------------------------------
| Assign all of our packages to the window object.
|--------------------------------------------------------------------------
*/

window._ = require('lodash');
window.$ = window.jQuery = require('jquery');

require('materialize-css');

window.Vue = require('vue');
window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.Laravel.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

window.Notifier = require('./plugins/Notifier');

window.Validators = require('./plugins/Validators');

require('./plugins/Dialog');

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
