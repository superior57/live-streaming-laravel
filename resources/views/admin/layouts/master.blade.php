<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MILLI | Dashboard</title>
    <meta name="csrf-token" value="{{ csrf_token() }}" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('admin/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/css/_all-skins.css') }}">


    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <script>
    window.base_url = "{!! URL::to('/') !!}/";
    window.csrf_token = "{{ csrf_token() }}";
    </script>
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css') }}">
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    @stack('style')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div id="app" class="wrapper">

        @include('admin.layouts.header')
        <!-- Left side column. contains the logo and sidebar -->
        @include('admin.layouts.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->
        @include('admin.layouts.footer')

        <!-- Control Sidebar -->
        @include('admin.layouts.settings')
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

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

    <!-- jQuery 3 -->
    <!-- <script src="{{ asset('admin/js/jquery.min.js') }}"></script> -->
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/adminlte.js') }}"></script>
    <script src="{{ asset('js/jscolor.js') }}"></script>
    <script src="{{ asset('admin/js/demo.js') }}"></script>

    <script>
    $.ajaxSetup({ 
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });    

    </script>

    @stack('script')
</body>

</html>