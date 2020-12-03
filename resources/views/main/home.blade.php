@extends('layout.main_layout')
@section('title','Home')
@section('main_content')
<div id="container"> 
    <!--Set your own slider options. Look at the v_RevolutionSlider() function in 'theme-core.js' file to see options-->
    <div class="home-slider-wrap fullwidthbanner-container">
        <div class="v-rev-slider" data-slider-options='{ "startheight":750 }'>
            <ul>
            <!-- SLIDE  -->
            @foreach($carousel as $car)
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1000"> 
                <!-- MAIN IMAGE --> 
                <img src="{{asset('images')}}/{{$car->carousel_url}}" alt="fullslide6" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" style="filter: brightness(20%)"> 
                <!-- LAYERS --> 
                <!-- LAYER NR. 1 -->
                <div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme main-home"
                                data-x="center" data-hoffset="0"
                                data-y="250" data-voffset="0"
                                data-speed="600"
                                data-start="800"
                                data-easing="Power4.easeOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.1"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">{{$car['carousel_big']}}</div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption light_medium_30 lfb ltt tp-resizeme"
                                data-x="center" data-hoffset="0"
                                data-y="330" data-voffset="0"
                                data-speed="600"
                                data-start="900"
                                data-easing="Power4.easeOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.01"
                                data-endelementdelay="0.1"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">{{$car['carousel_desc']}} </div>

            </li>
            @endforeach
            {{-- <li data-transition="fade" data-slotamount="7" data-masterspeed="600"> <img alt="Nexus" src="{{asset('assets/main/img/slider/slider6.jpg')}}" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                <div class="tp-caption lfb light_heavy_70_shadowed stb white-color no-line"
                                data-x="center" data-hoffset="0"
                                data-y="250" data-voffset="0"
                                data-speed="800"
                                data-start="600"
                                data-easing="Circ.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0"
                                data-endelementdelay="0"
                                data-endspeed="600"
                                style="z-index: 2; line-height: 60px;">CREATIVE DIGITAL AGENCY</div>
                <div class="tp-caption v-caption-h1 lfb st center"
                                data-x="center" data-hoffset="0"
                                data-y="330" data-voffset="0"
                                data-speed="700"
                                data-start="1100"
                                data-easing="Circ.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0"
                                data-endelementdelay="0"
                                data-endspeed="600"> Lorem ipsum dolor sit amet consectetur adipisicing 
                elitsed <br>
                eiusmod tempor enim minim </div>
                <div class="tp-caption lfb stb"
                                data-x="center" data-hoffset="0"
                                data-y="400" data-voffset="0"
                                data-speed="700"
                                data-start="1700"
                                data-easing="Circ.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0"
                                data-endelementdelay="0"
                                data-endspeed="600"> <a href='#' class="btn v-btn v-second-light">FIND OUT MORE</a> </div> --}}
                
                <!--<div class="v-slider-overlay overlay-colored"></div>--> 
            </li>
            </ul>
        </div>
    </div>
</div>
<article class="notice">
    <div class="container"><!--Biarin kosong aja dulu ini--></div>
</article>
<div class="section-content banner-section">
    <div class="container triggerAnimation animated" data-animate="bounceIn">
        <p>Have the courage to follow your heart and intuition. They somehow know what you truly want to become.</p>
        <div class="user">Steve Jobs</div>
    </div>
</div>

<div class="no-bottom-spacing">
    {{-- <div class="v-bg-stylish v-bg-stylish-v11  no-bottom-padding">
        <div class="homepage__cta-bg"></div>
        <div class="container">
            <div class="row center">
                <div class="col-sm-12">
                    <p class="v-smash-text-large"> <span>You Will <strong>Love</strong> Our Template</span> </p>
                    <p class="lead">100% Responsive, Clean &amp; optimized for all devices.</p>
                </div>
                <!--metrics-Wrap-->
                <div class="metrics-wrap">
                    <div class="container">
                        <div class="row center v-counter-wrap">
                            <div class="col-sm-3">
                                <div class="count-cercle"> <i class="fa fa-briefcase"></i>
                                    <div class="v-counter">
                                    <div class="count-number" data-from="0" data-to="25964" data-speed="1000" data-refresh-interval="25"></div>
                                    <h6 class="v-counter-text">Projects</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="count-cercle"> <i class="fa fa-clock-o"></i>
                                    <div class="v-counter">
                                        <div class="count-number" data-from="0" data-to="35469" data-speed="1500" data-refresh-interval="25"></div>
                                        <h6 class="v-counter-text">Hours Work</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="count-cercle"> <i class="fa fa-send"></i>
                                    <div class="v-counter">
                                        <div class="count-number" data-from="0" data-to="86214" data-speed="2000" data-refresh-interval="25"></div>
                                        <h6 class="v-counter-text">E-mail</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="count-cercle last"> <i class="fa fa-star"></i>
                                    <div class="v-counter">
                                        <div class="count-number" data-from="0" data-to="3647" data-speed="2500" data-refresh-interval="25"></div>
                                        <h6 class="v-counter-text">Completed</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12"> <img alt="Nexus" class="img-responsive center-block" data-animation="fade-from-bottom" data-delay="200" src="{{asset('assets/main/img/v-view.png')}}"> </div>
            </div>
        </div>
    </div> --}}
    <div class="v-parallax v-bg-stylish v-bg-stylish-v4">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="video_area">
                        @foreach ($abouthome as $abthm)
                        <img src="{{asset('images')}}/{{$abthm->abouthome_image}}" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-6">
                    <p class="v-smash-text-large">Get Experience With Our Service</p>
                @foreach ($abouthome as $abthm)
                <p class="v-lead">{!!($abthm->abouthome_text)!!}</p>
                @endforeach
                <a href="/about"><button>Read More</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="v-bg-stylish v-bg-stylish-v3">
        <div class="container">
            <div class="row center">
                <div class="col-sm-12">
                    <p class="v-smash-text-large"> <span>OUR Products</span> </p>
                </div>
            </div>
            <div class="v-spacer col-sm-12 v-height-mini"></div>
            <div class="row center portfolio-block">
                <div class="row center portfolio">
                    <div class="col-sm-12">
                        <div class="carousel-wrap no-padding">
                            <div class="owl-carousel" data-plugin-options='{"items": 4, "singleItem": false, "pagination": true}'>
                                @foreach($product as $pro)
                                <div class="item">
                                    <figure class="animated-overlay overlay-alt"> <img alt="Nexus" src="{{asset('images')}}/{{$pro->product_image}}" /> <a href="portfolio-single.html" class="link-to-post"></a>
                                    <figcaption>
                                        <div class="thumb-info thumb-info-v2"><i class="fa fa-angle-right"></i></div>
                                    </figcaption>
                                    </figure>
                                    <div class="v-portfolio-item-info">
                                    <h3 class="v-portfolio-item-title"> <a href="portfolio-single.html" class="link-to-post">{{$pro->product_name}}</a> </h3>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials-slider">
        <div class="container">
            <div class="row center">
                <div class="col-sm-12">
                    <p class="v-smash-text-large"> <span>Customers Love Nexus</span> </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="carousel-wrap">
                <div class="v-testimonial-wrap-v2">
                    <div class="owl-carousel" data-plugin-options='{"items": 1, "autoPlay": 9000, "pagination": true, "autoHeight": true}'>
                        @foreach ($customer as $cus)
                        <div class="v-testimonial-item">
                            <div class="testimonial testimonial-thumb-side">
                                <div class="testimonial-author">
                                    <figure class="featured-thumbnail"> <img alt="Nexus" src="{{asset('images')}}/{{$cus->customer_image}}"> <span class="quote"></span> </figure>
                                </div>
                                <div class="wrapper">
                                <div class="excerpt"> {!!$cus->customer_quote!!}</div>
                                <div class="user">-{{$cus->customer_name}}</span></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    <!--Client Carousel v2-->
    <div class="v-clients-widget-v2 v-bg-stylish v-bg-stylish-v4">
        <div class="container">
            <div class="row center">
                <div class="col-sm-12">
                    <p class="v-smash-text-large"> <span>Our Clients</span> </p><br>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="v-clients-wrap-v2 carousel-wrap">
                        <div class="owl-carousel" data-plugin-options='{"items": 6, "singleItem": false, "autoPlay": true}'>
                            @foreach ($client as $cli)
                            <div class="item">
                            <figure> <a href="http://{{$cli->client_url}}" target="_blank"> <img alt="Nexus" src="{{asset('images')}}/{{$cli->client_logo}}" /> </a> </figure>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Client Carousel v2-->

    
    <x-main_footer />

</div>
@endsection
