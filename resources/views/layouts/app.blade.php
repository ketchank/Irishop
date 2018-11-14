<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
     <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Irishop') }}</title>

    <link rel="icon" href="img/core-img/logofav.png">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
     <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
   
</head>
<body>
 @yield('content') 
 
     {{-- <div id="app">  
        <main class="py-4">
           
        </main>
       
    </div> --}}
    
  

</body>
</html>
