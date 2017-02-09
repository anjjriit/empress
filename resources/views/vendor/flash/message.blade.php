@if (session()->has('flash_notification.message'))
    @if (session()->has('flash_notification.overlay'))
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => session('flash_notification.title'),
            'body'       => session('flash_notification.message')
        ])
        <script>
            $('#flash-modal').modal();
        </script>
    @else
        <script>
            $.notify({
                icon: "notifications",
                message: "{!! session('flash_notification.message') !!}",
            },{
                type: "{{ session('flash_notification.level') }}",
                timer: 5000,
                placement: {
                    from: "top",
                    align: "center"
                },
                animate: {
                    enter: 'animated bounceInDown',
                    exit: 'animated bounceOutUp'
                },
                offset: 65,
                allow_dismiss: true,
                template: '<div class="col s11 m5 l4 center alert alert-{0} alert-with-icon" data-notify="container">' +
                                '<i class="material-icons" data-notify="icon"></i>' +
                                '<button type="button" aria-hidden="true" data-notify="dismiss" class="close waves-effect waves-light waves-circle">' +
                                    '<i class="material-icons">close</i>' +
                                '</button>' +
                                '<span data-notify="title">{1}</span>' +
                                '<span data-notify="message"><p>{2}</p></span>'+
                            '</div>'
            });

        </script>
    @endif
@endif
