@extends('layout.admin_layout')
@section('main_content')
@section('title','Edit Product')
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
          <h3 class="box-title">Edit Product ({{$product->product_name}})</h3>
          <a href="{{url('/admin/product')}}"> <button type="button" class="btn btn-primary" style="float:right">Cancel</button> </a>

          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method="POST" action="{{route('product.update')}}" enctype="multipart/form-data">
            {{-- {{method_field('Patch')}}   --}}
            @csrf
          <input type="hidden" name="id" value="{{$product->id}}">
            <div class="box-body">
              <div class="form-group">
              <img id="previewIMG" alt="preview image" src="{{asset('images')}}/{{$product->product_image}}" style="max-width: 200px;margin-top:20px"/>
              </div>
              <div class="form-group">
                <label for="name_product">Product Name</label>
              <input type="text" class="form-control" id="name_product" placeholder="Enter Product Name" value="{{$product->product_name}}" name="product_name">
              @if($errors->has('product_name'))
              <span class="text-danger">{{$errors->first('product_name')}}</span>
              @endif
              </div>
              <div class="form-group">
                <label>Select</label>
                <select class="form-control" name="category_id">
                  <option selected="true" disabled="disabled" value="">Select Product Category</option>    
                  @foreach($category as $cat)
                  <option @if($cat->id ==$product->category_id) selected @endif value="{{$cat->id}}">
                    {{$cat->category_name}}
                    </option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="editor1">Product Description</label>
                <textarea id="editor1" name="product_description" rows="10" cols="80">
                    {{$product->product_description}}
                </textarea>
                @if($errors->has('product_description'))
                <span class="text-danger">{{$errors->first('product_description')}}</span>
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