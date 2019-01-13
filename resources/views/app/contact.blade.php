@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/home.css')}}">
@stop

@section('nav')

@include('includes.nav')

@stop

     @section('content')
     

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Kontakt Formular
      </h1>

       <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <div style="overflow:hidden;width: 700px;height: 440px;"><iframe width="700" height="440" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Allemagne%2CGummersbach+(Titre)&amp;ie=UTF8&amp;t=k&amp;z=19&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div><small><a href="https://embedgooglemaps.com/es/">https://embedgooglemaps.com/es/</a></small></div><div><small><a href="http://botonmegusta.org/">Boton Megusta</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><br />
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Informationen</h3>
          <p>
            Steinmüllerallee 1
            <br>51643 Gummersbach
            <br>
          </p>
          <p>
            <abbr title="Phone">P</abbr>: +49 2261-8196-6840
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:claudesimo1990@gmail.com">th-köln-RaumReservierung@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 von bis 22:00 uhr
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Schreiben Sie Uns </h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Name und vorname:</label>
                <input type="text" class="form-control" value="{{$user->name}}" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telephone number (Optional):</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Addresse:</label>
                <input type="email" class="form-control" value="{{$user->email}}" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Nachricht:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">schicken</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
@stop