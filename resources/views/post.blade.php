<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Article Management</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet"/>

    <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <meta name="csrf-token" value="{{ csrf_token() }}"/>
</head>
<body>

    <div id="app">
        <example-component></example-component>
    </div>

    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
</body>
</html>