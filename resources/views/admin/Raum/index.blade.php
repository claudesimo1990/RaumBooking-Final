@extends('admin.layouts.app')

@section('headSection')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    @include('admin.layouts.pagehead')
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Räume</h3>
        <p>@include('flash::message')</p>
        <a class='col-lg-offset-5 btn btn-success' href="{{ route('raume.create') }}">Add New</a>
        @include('includes2.messages')
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Unsere Räume</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Raum.Name</th>
                          <th>Number</th>
                          <th>Gebäude ID</th>
                          <th>Bilder</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
                    
                        @forelse($raume as $raum)
                        <tfoot>
                        <tr>
                          <th>{{$raum->id}}</th>
                          <th>{{$raum->name}}</th>
                          <th>{{$raum->raum_number}}</th>
                          <th>{{$raum->gebaude->id}}</th>
                          <th>{{$raum->image}}</th>
                          <th><button class="btn btn-success">Edit</button></th>
                          <th>
                            {{ Form::open(array('method'=>'delete','route'=>['raume.destroy',$raum->id]))}}
                            <button type="submit" class="btn btn-danger">Löschen</button>
                            {{Form::close()}}
                          </th>
                        </tr>
                        </tfoot>
                        @empty
                        <div class="bg-success mb-4 mt-4">
                          <p>
                            Das Gebaude hat noch kein Raum zugewiesen bekommen !
                          </p>
                        </div>
                        @endforeach
                      </table>
                    </div>
                    <hr>
                    <span> {{$raume->links()}} </span>
                    <!-- /.box-body -->
                  </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('footerSection')
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection