@extends('layout.admin_layout')
@section('main_content')
@section('title','Contact Us Messages')
@section('body','hold-transition skin-blue sidebar-mini')
<div class="wrapper">
    <x-admin_header />
    <x-admin_sidebar />

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
<!-- Main content -->
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Contact Us Messages</h3>
        </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Contact ID</th>
                <th>Contact Name</th>
                <th>Contact Email</th>
                <th>Contact Subject</th>
                <th>Contact Message</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($contact as $con)
              <tr>
                <td>{{$con['id']}}</td>
                <td>{{$con['name']}}</td>                
                <td>{{$con['email']}}</td>
                <td>{{$con['subject']}}</td>
                <td>{{$con['contact_message']}}</td>
              </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Contact ID</th>
                <th>Contact Name</th>
                <th>Contact Email</th>
                <th>Contact Subject</th>
                <th>Contact Message</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->


    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <x-admin_footer />
</div>
<!-- ./wrapper -->

@endsection