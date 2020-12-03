@extends('layout.admin_layout')
@section('main_content')
@section('title','Edit Carousel')
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
            <h3 class="box-title">Edit Carousel Text</h3>
            <a href="{{url()->previous()}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>

          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{route('carousel.update')}}" enctype="multipart/form-data">
            {{-- {{method_field('Patch')}}   --}}
            @csrf
          <input type="hidden" name="id" value="{{$carousel->id}}">
            <div class="box-body">
              <div class="form-group">
                <label for="big_carousel">Heading</label>
              <input type="text" class="form-control" id="big_carousel" placeholder="Enter Big text" value="{{$carousel->carousel_big}}" name="carousel_big">
              </div>
              <div class="form-group">
                <label for="desc_carousel">Description </label>
              <input type="text" class="form-control" id="desc_carousel" placeholder="Enter short description" value="{{$carousel->carousel_desc}}" name="carousel_desc">
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