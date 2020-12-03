@extends('layout.admin_layout')
@section ('main_content')
@section('title','Admin')
@section('body','hold-transition register-page')
<div class="register-box">
    <div class="register-logo">
        <a href="admin"><b>Admin</b>LTE</a>
    </div>
    
        <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
    
        <form action="register" method="POST">
            @csrf
            <div class="form-group has-feedback">
            <input name="admin_name" type="text" class="form-control" placeholder="Full Name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
            <input name="admin_email" type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
            <input name="admin_password" type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
            <!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div>
            <!-- /.col -->
            </div>
        </form>
    
        <a href="admin" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
@endsection
