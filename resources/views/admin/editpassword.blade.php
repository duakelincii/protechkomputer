@extends('layout.admin_layout')
@section('main_content')
@section('title','Edit Password')
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
            <h3 class="box-title">Edit Password</h3>
            <a href="{{url('/admin/dashboard')}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>

            @if(Session::has('error'))
            <br><br>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="fa fa-exclamation-triangle"></i>
              <strong>Whoops</strong> <span>{{session('error')}}</span>
          </div>
          @endif
          </div>
          <!-- /.box-header -->
          <!-- form start -->
        <form method="POST" action="{{route('password.update')}}">
            @method('put')
              @csrf
          <input type="hidden" name="id" value="{{Session::get('admin')['id']}}">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter old password</label>
                <input type="password" class="form-control" name="old_password" id="exampleInputEmail1" placeholder="Enter Old Password" required='required'>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Enter new Password</label>
                <input type="password" class="form-control"name="admin_password" id="exampleInputPassword1" placeholder="Enter New Password" required="required">
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