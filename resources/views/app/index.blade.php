@extends('layouts.master2')



@section('nav')

@include('includes.nav')

@stop

@section('header')

@include('includes.header')

@stop

@section('content')

<h3 class="my-4"> Willkommen an der TH KÖLN </h3>

     <div class="row">
       <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
           <a href="#"><img class="card-img-top" src="{{ asset('/bilder/IMG_4152.JPG') }}" alt=""></a>
           <div class="card-body">
             <h4 class="card-title">
               <a href="#"> TH </a>
             </h4>
             <p class="card-text">Beim Hochschulwettbewerb von "Wissenschaft im Dialog" waren gleich zwei Teams der TH Köln in der ersten Runde erfolgreich: Das multimediale Web-Magazin "KITT – KI-Talks & Teams" aus der Fakultät für Informations- und Kommunikationswissenschaften und der mobile Infostand "KI Mobil" aus der Fakultät für Anlagen, Energie- und Maschinensysteme. Mit den je 10.000 Euro Preisgeld werden die Projekte bis Dezember 2019 umgesetzt.</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
           <a href="#"><img class="card-img-top" src="{{ asset('/bilder/IMG_4150.JPG') }}" alt=""></a>
           <div class="card-body">
             <h4 class="card-title">
               <a href="#">Ferschau</a>
             </h4>
             <p class="card-text">Schnuppertage werden von Mitte Oktober bis Mitte Januar und von Mitte April bis Mitte Juni angeboten. Die Teilnahme ist kostenlos.</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
           <a href="#"><img class="card-img-top" src="{{ asset('/bilder/IMG_4153.JPG') }}" alt=""></a>
           <div class="card-body">
             <h4 class="card-title">
               <a href="#">Mensa</a>
             </h4>
             <p class="card-text">Sie sind in der Oberstufe und ziehen ein Studium in Erwägung? Oder Sie fragen sich, wie es nach der Schule weitergehen soll? Oder sind Sie Eltern von studieninteressierten Kindern und haben Fragen zu den aktuellen Studienmöglichkeiten und Studienbedingungen? Am "Informationstag für Studieninteressierte" können Sie sich über das gesamte Studienangebot der TH Köln informieren.</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
           <a href="#"><img class="card-img-top" src="{{ asset('/bilder/IMG_4157.JPG') }}" alt=""></a>
           <div class="card-body">
             <h4 class="card-title">
               <a href="#">HauptGebaude</a>
             </h4>
             <p class="card-text">Studienorientierung an der TH Köln: Diese Angebote unterstützen Sie u.a. bei der Studienfachwahl.</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
           <a href="#"><img class="card-img-top" src="{{ asset('/bilder/IMG_4151.JPG') }}" alt=""></a>
           <div class="card-body">
             <h4 class="card-title">
               <a href="#">New Gebaude</a>
             </h4>
             <p class="card-text">[oberberg-aktuell.de, 11.02.19] Studierende vom Campus Gummersbach sind für die Entwicklung innovativer Apps mit dem Unitechnik-Förderpreis ausgezeichnet worden.</p>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-sm-6 portfolio-item">
         <div class="card h-100">
           <a href="#"><img class="card-img-top" src="{{ asset('/bilder/IMG_4149.JPG') }}" alt=""></a>
           <div class="card-body">
             <h4 class="card-title">
               <a href="#">Bibliothek</a>
             </h4>
             <p class="card-text">Interessieren Sie sich für bestimmte Studiengänge der TH Köln? Dann haben Sie die Möglichkeit, an sogenannten Schnuppertagen als Gast Vorlesungen in den Bachelorstudiengängen Ihrer Wahl zu besuchen.</p>
           </div>
         </div>
       </div>
     </div>
     <!-- /.row -->

     <!-- Features Section -->
     <div class="row">
       <div class="col-lg-6">
         <h2>Hochschulwettbewerb von "Wissenschaft im Dialog"</h2>
         <p>The Modern Business template by Start Bootstrap includes:</p>
         <ul>
           <li>
             <strong>Raumreservierung</strong>
           </li>
           <li>Schnuppertage</li>
           <li>Schnupperplan </li>
           <li>Ab Mitte Oktober finden Sie das Programm für das Wintersemester 2018/19 auf dieser Seite.</li>
           <li>Schnuppertage werden von Mitte Oktober bis Mitte Januar und von Mitte April bis Mitte Juni</li>
         </ul>
         <p>[WDR Lokalzeit aus Köln, 07.02.19] Ein bislang wenig genutztes Areal in Köln-Weidenpesch soll bebaut werden. Prof. Fabian Storch kommentiert als Studiogast die Pläne.</p>
       </div>
       <div class="col-lg-6">
         <img class="img-fluid rounded" src="{{ asset('/bilder/IMG_4145.JPG') }}" alt="">
       </div>
     </div>
     <!-- /.row -->

     <hr>

     <!-- Call to Action Section -->
     <div class="row mb-4">
       <div class="col-md-8">
       </div> 
     </div>

   </div>
   <!-- /.container -->


@stop
