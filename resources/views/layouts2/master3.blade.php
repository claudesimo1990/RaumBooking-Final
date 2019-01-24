<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('style')
        <title>Laravel</title>
<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        </style>
    </head>
    <body>
   <!-- Navigation -->
    @include('includes.nav')

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        @yield('header')
      </div>
    </header>
    <div class="container" style="margin-top: 10%; width: 100%;height: 100%:">
         @yield('content')
    </div>
       
    </body>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @yield('script')
</html>