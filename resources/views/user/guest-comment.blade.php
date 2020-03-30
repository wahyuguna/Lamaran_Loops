@extends('layouts.master')
@section('breadcrump')
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Guest Comments</li>
      </ol>
@endsection
@section('content')
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Guest Comments</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Nama</th>
                  <th>Youre Comments</th>
                </tr>
                </thead>
                @foreach ($guest as $data)
                <tbody>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->email }}</td>
                  <td>{{ $data->name }}</td>
                  <td>{{ $data->comment }}</td>
                </tbody>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
@endsection
@section('script')


@endsection
