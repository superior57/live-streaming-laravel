<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="{{ csrf_token() }}" />

    <title>MILLI</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link href="{{ asset('css/base.css') }}" type="text/css" rel="stylesheet"/> -->
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" />
    <!-- <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/> -->
    <!-- <script src="{{ asset('js/sweetalert2.js') }}"></script> -->
    <script>
    window.base_url = "{!! URL::to('/') !!}/";
    window.csrf_token = "{{ csrf_token() }}";
    window.auth = "{{ auth()->check() }}";
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    @stack('style')
</head>

<body>
    <div class="preloader">
        <div class="lds-dual-ring"></div>
    </div>
    <img id="login_bg" class="background-image" src="{{ asset('img/background.jpg') }}" alt="">

    <div id="app">
        @yield('content')
    </div>

    <div class="modal fade in" id="modal_logout" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true"
        style="display: none; padding-right: 17px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" id="modalHeader">
                    <h4 class="modal-title" id="modalLabel">Ooops! Someone logged in other device, you can not contine.</h4>
                </div>
                <div class="modal-footer" id="modalFooter"><button type="button" class="btn btn-default"
                        data-dismiss="modal" id="fechar" onclick="location.reload();">Close</button></div>
            </div>
        </div>
    </div>

    <!-- jQuery 2.2.0 -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
    <!-- Bootstrap 3.3.6 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(() => {
        displayUpdateSession();
    });
    

    var checkss = setInterval(() => {
        displayUpdateSession();
        checkSS();
    }, IntervalTime);
    </script>
    <!-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> -->
    @stack('script')
    <script>
        setTimeout(() => {
            $('.preloader').fadeOut();
        }, 500);
    </script>

</body>

</html>