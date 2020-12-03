@extends('layout.main_layout')
@section('main_content')
@section('title','Contact')
<div id="container">
    <div class="v-page-heading v-bg-stylish v-bg-stylish-v1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-text">
                        <h1 class="entry-title">Contact Us</h1>
                    </div>

                    <ol class="breadcrumb">
                        <li><a href="#">Nexus</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="v-page-wrap no-bottom-spacing">
        <div class="container">
            <div class="row">
                <div class="v-gallery-widget col-sm-6">
                    <div class="gallery-wrap">
                        <div class="gallery-slider" data-transition="slide" data-autoplay="no">
                            <ul class="slides">
                                <li>
                                    <img alt="Nexus" src='{{asset('assets/main/img/contact.jpg')}}' style="width:1280px;height:350px" />
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="v-heading-v2">
                        <h3>Contact Us</h3>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{session('success')}}
                    </div>
                    @endif
                <form class="special-contact-form" action="{{route('contact.store')}}" method="post">
                    @csrf    
                    <div class="input-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}"/>
                            @if($errors->has('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                            @endif
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" />
                            @if($errors->has('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                            @endif
                            <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{old('subject')}}"/>
                            @if($errors->has('subject'))
                                <span class="text-danger">{{$errors->first('subject')}}</span>
                            @endif
                            <textarea class="form-control" rows="3" name="contact_message" placeholder="Your message..." value="{{old('contact_message')}}"></textarea>
                            @if($errors->has('contact_message'))
                            <span class="text-danger">{{$errors->first('contact_message')}}</span>
                        @endif
                        </div>
                        <button type="submit" class="btn btn-success">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <x-main_footer />
    </div>
@endsection