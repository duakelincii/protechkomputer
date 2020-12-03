@extends('layout.admin_layout')
@section('main_content')
@section('title','About us')
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
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">About Us (HomePage)</h3>
          @if(Session::has('successabouthome'))
          <br><br>
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="fa fa-check"></i>
              <span>{{session('successabouthome')}}</span>
          </div>                        
          @elseif(Session::has('successaboutimage'))
          <br><br>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="fa fa-check"></i>
              <span>{{session('successaboutimage')}}</span>
            </div>       
          @endif
        </div>

        <div class="box-body">
          @foreach($abouthome as $abt)
          <img src="{{asset('images')}}/{{$abt->abouthome_image}}" alt="" width="500" height="250">       
        </div>
<div class="box-body">          {!!$abt->abouthome_text!!}
</div>
        <!-- /.box-body -->
          <div class="box-footer">
            <a href="{{url('admin/edit-about-home-text')}}/{{$abt->id}}"><button class="btn btn-info pull-left">Edit Text</button></a>
            <a href="{{url('admin/edit-about-home-image')}}/{{$abt->id}}"><button class="btn btn-info pull-right">Edit Image</button></a>
          </div>
          @endforeach

        <!-- /.box-footer-->
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