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
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    @stack('style')
</head>

<body>
    <img class="background-image" src="{{ asset('img/background.jpg') }}" alt="">

    <div id="app">
        @yield('content')
    </div>

    <!-- jQuery 2.2.0 -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script> -->
    <!-- Bootstrap 3.3.6 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
    $(document).ready(() => {
        displayUpdateSession();
    });
    </script>
    <!-- <script src="{{ mix('js/app.js') }}" type="text/javascript"></script> -->
    @stack('script')

</body>
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" id="modalHeader">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Fechar</span></button>
                <h4 class="modal-title" id="modalLabel"> Ooops!</h4>
            </div>
            <div class="modal-body" id="modalBody">
                <h3>Carregando ...</h3>
            </div>
            <div class="modal-footer" id="modalFooter">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="fechar">Fechar</button>
            </div>
        </div>
    </div>
</div>

</html>