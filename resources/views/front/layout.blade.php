@include('front.scripts')
@include('front.styles')
@include('front.metriks')
@include('front.header')
@include('front.footer')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/id_fav.png" type="image/png">
    @yield('styles')
    @yield('meta')
    <script>
        dataLayer = [];
    </script>
    @yield('metriks')
    <script charset="UTF-8" src="//cdn.sendpulse.com/28edd3380a1c17cf65b137fe96516659/js/push/5cdef2d298991ff1822dcdcd3a3a5384_1.js" async></script>
    <!— Facebook Pixel Code —>
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '257698391410875'); // Insert your pixel ID here.
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=257698391410875&ev=PageView&noscript=1"
        /></noscript>
    <!— DO NOT MODIFY —>
    <!— End Facebook Pixel Code —>
    <script>
        fbq('track', 'Search', {
            search_string: 'leather sandals'
        });
    </script>
    <script>
        fbq('track', 'ViewContent', {
            value: 3.50,
            currency: 'USD'
        });
    </script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDWZ8MW"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<p class="top">{{$static->logo_text_field}}</p>
<div class="wrapper">
    @yield('header')
    @yield('content')
    @yield('footer')
</div>
</body>

@yield('scripts')

@include('front.popups.question')
@include('front.popups.thank')
@include('front.popups.order')
<a href="#thanks" class="thank" style="display: none"></a>
</html>
