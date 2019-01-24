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
        <h3 class="box-title">Buchungen</h3>
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
                      <h3 class="box-title">Benutzer Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Geb.ID</th>
                          <th>Raum.ID</th>
                          <th>User.ID</th>
                          <th>QR-CODE</th>
                          <th>Von</th>
                          <th>Bis</th>
                          <th>Bemerkung</th>
                         </tr>
                        </thead>
                        @foreach($buchungList as $buchung)
                        <tfoot>
                        <tr>
                          <th>{{$buchung->id}}</th>
                          <th>{{$buchung->gebaude_id}}</th>
                          <th>{{$buchung->raum_id}}</th>
                          <th>{{$buchung->user_id}}</th>
                          <th>{{$buchung->qrcode}}</th>
                          <th>{{\Carbon\Carbon::parse($buchung->von)->format('d/m/Y H:i:s')}}</th>
                          <th>{{\Carbon\Carbon::parse($buchung->bis)->format('d/m/Y H:i:s')}}</th>
                          <th>{{$buchung->kommentar}}</th>

                          <th><button class="btn btn-success">Edit</button></th>
                          <th><button class="btn btn-danger">Delete</button></th>
                        </tr>
                        </tfoot>
                        @endforeach
                      </table>
                    </div>
                    <hr>
                    <span>{{$buchungList->links()}}</span>
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