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
              <h3 class="box-title">Add Gebäude</h3>
            </div>

            @include('includes2.messages')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="post">
            {{ csrf_field() }}
              <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="name">Gebaude name</label>
                  <input type="select" class="form-control" id="name" name="name" placeholder="User name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Anzahl Etage</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Anzahl Räume</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" name="image" placeholder="image" value="{{ old('image') }}">
                </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href='{{ route('gebaude.index') }}' class="btn btn-warning">Back</a>
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