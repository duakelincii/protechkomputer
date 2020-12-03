@extends('layout.admin_layout')
@section('main_content')
@section('title','Edit Profile')
@section('body','hold-transition skin-blue sidebar-mini')
<div class="wrapper">
    <x-admin_header />
    <x-admin_sidebar />

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
<!-- Main content -->
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Profile</h3>
            <a href="{{url()->previous()}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>

          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form method="POST" action="{{route('profile.update')}}">
            @method('put')
              @csrf
          <input type="hidden" name="id" value="{{Session::get('admin')['id']}}">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
              <input type="text" class="form-control"name="admin_name" id="exampleInputEmail1" placeholder="Enter name" value="{{Session::get('admin')['admin_name']}}" required="required">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="admin_email" id="exampleInputEmail1" placeholder="Enter email" value="{{Session::get('admin')['admin_email']}}" required="required">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
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