@extends('layout.admin_layout')
@section('main_content')
@section('title','New vision')
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
            <h3 class="box-title">New Vision</h3>
          <a href="{{url()->previous()}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="new-vision">
              @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="editor1">Vision</label>
                <textarea id="editor1" name="vision" rows="10" cols="80">
                </textarea>
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