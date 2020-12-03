@extends('layout.main_layout')
@section('main_content')
@section('title','About')
<div id="container">
    <div class="v-page-heading v-bg-stylish v-bg-stylish-v1">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-text">
                        <h1 class="entry-title">About Us</h1>
                    </div>

                    <ol class="breadcrumb">
                        <li><a href="/">Nexus</a></li>
                        <li class="active">About Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="v-page-wrap no-bottom-spacing">
        @foreach($about as $abt)
        <div class="container">
            <div class="row">
                <div class="v-gallery-widget col-sm-6">
                    <div class="gallery-wrap">
                        <div class="gallery-slider" data-transition="slide" data-autoplay="no">
                            <ul class="slides">
                                <li>
                                    <a href='{{asset('images')}}/{{$abt->about_us_image}}' class='view'>
                                        <img alt="Nexus" src='{{asset('images')}}/{{$abt->about_us_image}}' width='1280' height='720' />
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="v-heading-v2">
                        <h3>Welcome to Nexus</h3>
                    </div>
                    <p style="text-align: justify">
                        {!!$abt->about_us_text!!}
                    </p>
                </div>
            </div>
        </div>
        @endforeach


    <div class="v-page-wrap1">
        <div class="container">
            <div class="row">
                <div class="v-content-wrapper">
                    <div class="col-sm-6">
                        <div class="feature-box feature-box-secundary-one" data-animation="grow" data-delay="0">
                            <div class="feature-box-icon small "> <i class="fa fa-globe v-icon" aria-hidden="true"></i></div>
                            <div class="feature-box-text clearfix">
                                <h3>Vision</h3>
                                <div class="feature-box-text-inner">
                                    @foreach($vision as $vis)
                                    {!!$vis->vision!!}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-sm-6">
                    <div class="feature-box feature-box-secundary-one" data-animation="grow" data-delay="200">
                        <div class="feature-box-icon small color2"> <i class="fa fa-cog v-icon" aria-hidden="true"></i> </div>
                        <div class="feature-box-text">
                            <h3>Mission</h3>
                            <div class="feature-box-text-inner">
                                @foreach($mission as $mis)
                                {!!$mis->mission!!}
                                @endforeach                            
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="v-spacer col-sm-12 v-height-small"></div>
    </div>
        <!--Our Happy Clients-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="v-heading-v2">
                        <h3>Our Happy Clients</h3>
                    </div>
                </div>

                <div class="v-clients-widget col-sm-12 cust-logos">
                    <div class="v-clients-wrap carousel-wrap">

                        <div class="owl-carousel" data-plugin-options='{"items": 6, "singleItem": false, "autoPlay": true, "pagination": true}'>
                            @foreach ($client as $cli)
                            <div class="item">
                                <figure>
                                    <a href="http://{{$cli->client_url}}" target="_blank">
                                        <img alt="Nexus" src="{{asset('images')}}/{{$cli->client_logo}}" />
                                    </a>
                                </figure>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Our Happy Clients-->

        <div class="container">
            <div class="v-spacer col-sm-12 v-height-small"></div>
        </div>
    </div>
    <x-main_footer />
</div>
@endsection