@if (session()->has('flash_notification.message'))
    @if (session()->has('flash_notification.overlay'))
        <div id="flash-modal" class="modal medium">
            <div class="modal-content">
                <h4>{{ session('flash_notification.title') }}</h4>
                {!! session('flash_notification.message') !!}
            </div>
            <div class="modal-footer">
                <a class="modal-action modal-close waves-effect waves-green btn-flat">Cool, Got It</a>
            </div>
        </div>

        <script>
            $(function() {
                FlashModal.modal('open');
            });
        </script>
    @else
        <script>
            /*
            |--------------------------------------------------------------------------
            | Available Alert Types
            |--------------------------------------------------------------------------
            |
            | These are all the available alert types available. default inverse 
            | primary success info warning danger rose.
            |
            */

            Notifier.run(
                "{!! session('flash_notification.message') !!}", 
                "{{ session('flash_notification.title') }}", 
                "{{ session('flash_notification.level') }}"
            );

        </script>
    @endif
@endif
