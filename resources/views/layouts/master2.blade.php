<!DOCTYPE html>
<html lang="de">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{{asset('/bilder/IMG_4154.PNG')}}}">
    @if( Request::is( Config::get('chatter.routes.home')) )
    <title>RaumReservierung TH KÖLN</title>
    @elseif( Request::is( Config::get('chatter.routes.home') . '/' . Config::get('chatter.routes.category') . '/*' ) && isset( $discussion ) )
        <title>{{ $discussion->category->name }} - RaumReservierung TH KÖLN</title>
    @elseif( Request::is( Config::get('chatter.routes.home') . '/*' ) && isset($discussion->title))
        <title>{{ $discussion->title }} - RaumReservierung TH KÖLN</title>
    @endif

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @yield('css')

    @if(Request::is( Config::get('chatter.routes.home') . '/*') )
     <link rel="stylesheet" href="/css/forumscss.css" />
    @endif

  </head>

  <body>

    <!-- Navigation -->
    @include('includes.nav')

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        @yield('header')
      </div>
    </header>

    <!-- Page Content -->
    <div class="container logreg">

         @include('flash::message')

      @yield('content')

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark haut">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; RaumReservierung TH KÖLN 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
     @yield('js')
  </body>

</html>
