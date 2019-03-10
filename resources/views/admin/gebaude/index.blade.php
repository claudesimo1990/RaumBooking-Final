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
                      <h3 class="box-title">Gebäude Tabelle</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Geb.Name</th>
                          <th>Anz_Etage</th>
                          <th>Anz_Räume</th>
                          <th>Image</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
                        @foreach($gebaudes as $gebaude)
                        <tfoot>
                        <tr>
                          <th>{{$gebaude->id}}</th>
                          <th>{{$gebaude->name}}</th>
                          <th>{{$gebaude->anz_etage}}</th>
                          <th>{{$gebaude->anz_raum}}</th>
                          <th>{{$gebaude->image}}</th>
                          <th>
                            <a href="{{route('gebaude.show',[$gebaude->id])}}" class="btn btn-success">Edit</a>   
                          </th>
                          <th>
                            {{ Form::open(array('method'=>'delete','route'=>['gebaude.destroy',$gebaude->id]))}}
                            <button type="submit" class="btn btn-danger">Löschen</button>
                            {{Form::close()}}
                          </th>
                        </tr>
                        </tfoot>
                        @endforeach
                      </table>
                    </div>
                    <hr>
                    <span>{{$gebaudes->links()}}</span>
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