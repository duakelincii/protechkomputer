@extends('layout.main_layout')
@section('main_content')
@section('title','Product')
<div id="container">
    <div class="v-page-heading v-bg-stylish v-bg-stylish-v1 no-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-text">
                        <h1 class="entry-title">Product</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">Nexus</a></li>
                        <li><a href="/product">Product</a></li>
                        <li class="active">Product Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>        
        
        
    <div class="v-page-wrap has-right-sidebar has-one-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <figure class="media-wrap">
                        <img alt="Nexus" src="{{asset('images')}}/{{$product->product_image}}" />
                    </figure>
                </div>
                <div class="col-sm-6">
                    <article>
                        <h3 class="blog-post-caption">{{$product->product_name}}</h3>
                        <section class="article-body-wrap">
                            <div class="body-text clearfix">
                                    {!!$product->product_description!!}
                            </div>
                        </section>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="v-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <article class="portfolio-article">
                        <div class="related-projects clearfix">

                            <h3 class="portfolio-sub-header">Related Projects</h3>

                            <div class="row center">

                                <div class="col-sm-12">
                                    <div class="carousel-wrap no-padding">
                                        <div class="owl-carousel" data-plugin-options='{"items": 4, "singleItem": false, "pagination": true}'>
                                            @foreach ($related as $rel)
                                            <div class="item">
                                                <figure class="animated-overlay overlay-alt">
                                                    <img alt="Nexus"  src="{{asset('images')}}/{{$rel->product_image}}" style="width:200px;height:150px;" />
                                                    <a href="{{url('product-detail/')}}/{{$rel->id}}" class="link-to-post"></a>
                                                    <figcaption>
                                                        <div class="thumb-info thumb-info-v2"><i class="fa fa-angle-right"></i></div>
                                                    </figcaption>
                                                </figure>
                                                <div class="v-portfolio-item-info">
                                                    <h3 class="v-portfolio-item-title">
                                                        <a href="{{url('product-detail/')}}/{{$rel->id}}" class="link-to-post">{{$rel->product_name}}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>


    

        <x-main_footer />
</div>
@endsection