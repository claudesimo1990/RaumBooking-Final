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
              <h3 class="box-title">Add Raum</h3>
            </div>

            @include('includes2.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('raume.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="name">Raum Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Gebaude name" value="{{ old('name') }}">
                </div>
                 <div class="form-group">
                  <label for="raum_number">Raum Number</label>
                  <input type="Number" class="form-control" id="raum_number" name="raum_number" placeholder="raum number" value="{{ old('raum_number') }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Gebaüde ID</label>
                    <select multiple class="form-control" name="gebaude_id" id="exampleFormControlSelect2">
                      @foreach($gebaudeId as $gebId)
                          <option>{{$gebId->id}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="form-group">
                  <label for="image">Bild</label>
                  <input type="file" class="form-control" id="image" name="image" placeholder="image" value="{{ old('image') }}">
                </div>
              <div class="form-group">
                <a href='{{ route('raume.index') }}' class="btn btn-warning">Zurück</a>
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