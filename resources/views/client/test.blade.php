@extends('layout.client')
@section('content')
    <div id="fb-root">

    </div>
    <div id="fb-customer-chat" class="fb-customerchat">

    </div>
@endsection
@push('scripts')
    <script>
        console.log('same');
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "185634164623700");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        console.log('ửok');
        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v18.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endpush
