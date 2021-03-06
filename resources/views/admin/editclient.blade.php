@extends('layout.admin_layout')
@section('main_content')
@section('title','Edit Client')
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
            <h3 class="box-title">Edit Client Text</h3>
            <a href="{{url('/admin/client')}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>

          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{route('client.update')}}" enctype="multipart/form-data">
            {{-- {{method_field('Patch')}}   --}}
            @csrf
          <input type="hidden" name="id" value="{{$client->id}}">
            <div class="box-body">
              <div class="form-group">
                <label for="name_client">Name</label>
              <input type="text" class="form-control" id="name_client" placeholder="Enter Big text" value="{{$client->client_name}}" name="client_name">
              @if($errors->has('client_name'))
              <span class="text-danger">{{$errors->first('client_name')}}</span>
            @endif
              </div>
              <div class="form-group">
                <label for="url_client">URL </label>
              <input type="text" class="form-control" id="url_client" placeholder="Enter a url" value="{{$client->client_url}}" name="client_url">
              @if($errors->has('client_url'))
                <span class="text-danger">{{$errors->first('client_url')}}</span> 
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