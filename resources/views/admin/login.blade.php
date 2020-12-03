@extends('layout.admin_layout')
@section('main_content')
@section('title','Admin')
@section('body','hold-transition login-page')
    <div class="login-box">
        <div class="login-logo">
        <a href="{{url('admin')}}"><b>Nexus </b><b>CMS</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
        <p class="login-box-msg">Sign in to dashboard</p>
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="fa-fa-fw fa fa-ban"></i>            {{session('error')}}
          </div>                        
        @endif  
        <form action="admin" method="post">
            @csrf
            <div class="form-group has-feedback">
            <input type="email" name="admin_email" class="form-control" placeholder="Email" value="{{old('admin_email')}}" required="required">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
            <input type="password" name="admin_password" class="form-control" placeholder="Password" required="required">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
            <!-- /.col -->
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
    
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
@endsection
