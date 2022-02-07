<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
        <title>BAYAN</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset("css/aos.css?ver=1.1.0") }}" rel="stylesheet">
        <link href="{{ asset("css/bootstrap.min.css?ver=1.1.0") }}" rel="stylesheet">
        <link href="{{ asset("css/main.css?ver=1.1.0") }}" rel="stylesheet">
        <noscript>
          <style type="text/css">
            [data-aos] {
                opacity: 1 !important;
                transform: translate(0) scale(1) !important;
            }
          </style>
        </noscript>

    </head>
    <body id="top">
        <div id="app">
            <App />
        </div>

        <script defer src="{{ mix('js/app.js') }}"></script>
        <script src="{{ asset("js/jquery.3.2.1.min.js?ver=1.1.0") }}"></script>
        <script src="{{ asset("js/popper.min.js?ver=1.1.0") }}"></script>
        <script src="{{ asset("js/bootstrap.min.js?ver=1.1.0") }}"></script>
        <script src="{{ asset("js/now-ui-kit.js?ver=1.1.0") }}"></script>
        <script src="{{ asset("js/aos.js?ver=1.1.0") }}"></script>
        <script src="{{ asset("js/main.js?ver=1.1.0") }}"></script>
      </body>
    </html>
