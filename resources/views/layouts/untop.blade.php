<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MUSICLOUD</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Bulma Version 0.7.1-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />    
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">       
    <link href="{{ asset('sass/extensions/bulma-divider.min.css') }}" rel="stylesheet">  
    <link href="{{ asset('src/css-spacing.css') }}" rel="stylesheet">    
</head>
<body>
    <div id="app" style="display:none">    

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
