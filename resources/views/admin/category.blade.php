@extends('layout.admin_layout')
@section('main_content')
@section('title','Categories')
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
            <h3 class="box-title">Category</h3>
            <a href="{{url('admin/new-category')}}"> <button type="button" class="btn btn-primary" style="float:right">Add Category</button> </a>
            @if(Session::has('successadd'))
            <br><br>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>
                <span>{{session('successadd')}}</span>
              </div> 
              @elseif(Session::has('successupdate'))
              <br><br>
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="fa fa-check"></i>
                  <span>{{session('successupdate')}}</span>
                </div>  
                @endif 
        </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>Category ID</th>
                <th>Category Name</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($category as $cat)
              <tr>
              <td>{{$cat['id']}}</td>
                <td>{{$cat['category_name']}}</td>
              <td>                      
                <a href="{{url('admin/edit-category')}}/{{$cat->id}}" class="btn btn-small"><i class="fa fa-fw fa-edit"></i> Edit</a>
              </td>
              </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Category ID</th>
                <th>Category Name</th>
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