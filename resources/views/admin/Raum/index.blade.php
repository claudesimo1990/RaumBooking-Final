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
        <a class='col-lg-offset-5 btn btn-success' href="{{ route('gebaude.create') }}">Add New</a>
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
                          <th>Image</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
                        @foreach($raume as $raum)
                        <tfoot>
                        <tr>
                          <th>{{$raum->id}}</th>
                          <th>{{$raum->name}}</th>
                          <th>{{$raum->number}}</th>
                          <th>{{$raum->gebaude->id}}</th>
                          <th>{{$raum->image}}</th>
                          <th><button class="btn btn-success">Edit</button></th>
                          <th><button class="btn btn-danger">Delete</button></th>
                        </tr>
                        </tfoot>
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
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endsection