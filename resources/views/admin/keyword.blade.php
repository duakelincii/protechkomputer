@extends('layout.admin_layout')
@section('main_content')
@section('title','About us (HomePage)')
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
          <h3 class="box-title">Keyword Google Protech Komputer</h3>
          @if(Session::has('successkeyword'))
          <br><br>
          <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="fa fa-check"></i>
              <span>{{session('successkeyword')}}</span>
          </div>                        
          @elseif(Session::has('successkeyword'))
          <br><br>
            <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="fa fa-check"></i>
              <span>{{session('successkeyword')}}</span>
            </div>       
          @endif
        </div>

        <div class="box-body">
          @foreach($datas as $key)
          <!-- <img src="{{asset('images')}}/{{$key->abouthome_image}}" alt="" width="500" height="250">        -->
        </div>
<div class="box-body">          {!!$key->text_key!!}
</div>
        <!-- /.box-body -->
          <div class="box-footer">
            <a href="{{route('edit.keyword',$key->id)}}"><button class="btn btn-info pull-left">Edit Text</button></a>
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