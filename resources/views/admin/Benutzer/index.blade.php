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
        <h3 class="box-title">Gebäude</h3>
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Konto bestätigt ?</th>
                          <th>Created at</th>
                          <th>Updated at</th>
                         </tr>
                        </thead>
                        @foreach($benutzer as $user)
                        <tfoot>
                        <tr>
                          <th>{{$user->id}}</th>
                          <th>{{$user->name}}</th>
                          <th>{{$user->email}}</th>
                          <th>{{$user->email_verified_at ? 'JA' : 'NEIN' }} </th>
                          <th>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s')}}</th>
                          <th>{{\Carbon\Carbon::parse($user->updated_at)->format('d/m/Y H:i:s')}}</th>

                          <th><button class="btn btn-success">Edit</button></th>
                          <th><button class="btn btn-danger">Delete</button></th>
                        </tr>
                        </tfoot>
                        @endforeach
                      </table>
                    </div>
                    <hr>
                    <span>{{$benutzer->links()}}</span>
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