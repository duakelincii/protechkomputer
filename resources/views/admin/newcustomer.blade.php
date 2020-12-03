@extends('layout.admin_layout')
@section('main_content')
@section('title','New Customer')
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
            <h3 class="box-title">New Customer</h3>
            <a href="{{url()->previous()}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>

          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="new-customer" enctype="multipart/form-data">
              @csrf
            <div class="box-body">
              <div class="form-group">
                <label for="name_customer">Customer Name</label>
              <input type="text" class="form-control" id="name_customer" placeholder="Enter Customer Name" value="" name="customer_name">
              @if($errors->has('customer_name'))
              <span class="text-danger">{{$errors->first('customer_name')}}</span>
          @endif
              </div>
              <div class="form-group">
                <label for="editor1">Customer Quote</label>
                <textarea id="editor1" name="customer_quote" rows="10" cols="80">
                </textarea>
            </div>
              <div class="form-group">
                <label for="image_customer">File input</label>
                <input type="file" id="image_customer" name="customer_image" onchange="previewFile(this)">
                <img id="previewIMG" alt="preview image" style="max-width: 200px;margin-top:20px"/>
                @if($errors->has('customer_image'))
                <span class="text-danger">{{$errors->first('customer_image')}}</span>
            @endif
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