@extends('layout.admin_layout')
@section('main_content')
@section('title','New Client')
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
            <h3 class="box-title">New Client</h3>
            <a href="{{url()->previous()}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>

          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="new-client" enctype="multipart/form-data">
              @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="name_client">Client Name</label>
              <input type="text" class="form-control" id="name_client" placeholder="Enter Client Name" value="" name="client_name">
              </div>
              <div class="form-group">
                <label for="url_client">Client URL </label>
                <input type="text" class="form-control" id="url_client" placeholder="Enter Client URL" value="" name="client_url">
            </div>
              <div class="form-group">
                <label for="logo_client">File input</label>
                <input type="file" id="logo_client" name="client_logo" onchange="previewFile(this)">
                <img id="previewIMG" alt="preview image" style="max-width: 200px;margin-top:20px"/>
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