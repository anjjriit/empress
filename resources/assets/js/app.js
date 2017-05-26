
/**
 * resources/assets/js/app.js
 *
 * Main app javascript entry point.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

/*
|--------------------------------------------------------------------------
| Require Dependencies
|--------------------------------------------------------------------------
|
| First we will load all of this project's JavaScript dependencies which
| includes Vue and other libraries. It is a great starting point when
| building robust, powerful web applications using Vue and Laravel.
|
*/

require('./bootstrap');

/*
|--------------------------------------------------------------------------
| Build Vue and Load Components
|--------------------------------------------------------------------------
|
| Next, we will create a fresh Vue application instance and attach it to
| the page. Then, you may begin adding components to this application
| or customize the JavaScript scaffolding to fit your unique needs.
|
*/

import Example from './components/Example';
import Welcome from './components/Welcome';
import Editor from './components/Editor';

Vue.component('example', Example);
Vue.component('welcome', Welcome);
Vue.component('editor', Editor);

const app = new Vue({
    el: '#app'
});

/*
|--------------------------------------------------------------------------
| Document ready, boot up our Materialize methods.
|--------------------------------------------------------------------------
*/

(function($){
    $(function(){
        $('.button-collapse').sideNav();
    
        $(".dropdown-button").dropdown({
            belowOrigin: true
        });

        $('select').material_select();
        
        // Specific modal for our alerts.
        window.FlashModal = $('#flash-modal').modal();

        // Other modals.
        window.Modal = $('.modal').modal();

        window.Dialog = $('.dialog').dialog();

        Materialize.updateTextFields();
        
        $(document).on('click', 'a.disabled', function(e) {
            e.preventDefault();
        });

        // delete dialogs for links
        $(document).on('click', '.delete', function (e) {
            e.preventDefault();

            var url = $(this).attr('href');
            
            var confirm = $('#confirm-dialog').dialog({
                confirm: function () {
                    location = url;
                }
            });

            confirm.dialog('open');
            
        });
    });
})(jQuery);
