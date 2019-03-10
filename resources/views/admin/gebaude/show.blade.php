@extends('admin.layouts.app')

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @include('admin.layouts.pagehead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Gebäude</h3>
            </div>

            @include('includes2.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('gebaude.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="name">Gebaude name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Gebaude name" value="{{$gebaude->name}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Anzahl Etage</label>
                     <input type="number" class="form-control" id="anz_etage" name="anz_etage" value="{{$gebaude->anz_etage}}">
                  </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Anzahl Räume</label>
                    <input type="number" class="form-control" id="anz_raum" name="anz_raum" value="{{$gebaude->anz_raum}}">
                  </div>
                <div class="form-group">
                  <label for="image">image</label>
                  <input type="file" class="form-control" id="image" name="image" placeholder="image" value="{{ old('image') }}">
                </div>
              <div class="form-group">
                <a href='{{ route('gebaude.index') }}' class="btn btn-warning">zurück</a>
                <button type="submit" class="btn btn-primary">herstellen</button>
                
              </div>
                
              </div>
          
        </div>

            </form>
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection