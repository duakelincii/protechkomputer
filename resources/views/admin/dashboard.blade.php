    @extends('layout.admin_layout')
    @section('main_content')
    @section('title','Dashboard')
    @section('body','hold-transition skin-blue sidebar-mini')
    <div class="wrapper">
        <x-admin_header />
        <x-admin_sidebar />
    
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            DASHBOARD
            <small>Welcome, {{Session::get('admin')['admin_name']}}</small>
            </h1>
        </section>
    
        <!-- Main content -->
        <section class="content container-fluid">
    
            @if(Session::has('successprofile'))
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>
            <span>{{session('successprofile')}}</span>
            </div>                        
            @elseif(Session::has('successpassword'))
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="fa fa-check"></i>
            <span>{{session('successpassword')}}</span>
            </div>                        
            @endif    
    
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <x-admin_footer />
    </div>
    <!-- ./wrapper -->
    
    @endsection