@extends('layout.main_layout')
@section('main_content')
@section('title','Products')
<div id="container">
    <div class="v-page-heading v-bg-stylish v-bg-stylish-v1 no-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-text">
                        <h1 class="entry-title">Products</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="/">Nexus</a></li>
                        <li class="active">Service</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>        
        
        
    <div id="container">

        <div class="v-page-wrap">

            <div class="container">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="v-portfolio-wrap">
                            <div class="v-portfolio-filter-wrap row clearfix">
                                <ul class="v-portfolio-filter-nav bar-styling filtering col-sm-12 clearfix">
                                    <li class="all selected"><a data-filter="*" href="#"><span class="item-name">All</span><span class="item-count">0</span></a></li>
                                    @foreach($category as $cat)
                                    <li><a href="#" class="beautiful" data-filter=".{{$cat->id}}"><span class="item-name">{{$cat->category_name}}</span></a></li>
                                    @endforeach
                                </ul>
                            </div>

                            <ul class="v-portfolio-items gallery-portfolio filterable-items col-3 row clearfix">
                                @foreach($data as $pro)
                            <li class="clearfix v-portfolio-item col-sm-4 gallery-item   {{$pro->category_id}}">
                                    <figure class="animated-overlay">
                                        <img alt="{{$pro->product_name}}"  src="{{asset('images')}}/{{$pro->product_image}}" style="width:500px;height:250px;">
                                        <a href="{{url('product-detail/')}}/{{$pro->id}}" class="link-to-post"></a>
                                        <figcaption>
                                            <div class="thumb-info thumb-info-extended">
                                            <h4>{{$pro->product_name}}</h4>
                                            <h5>{{$pro->category_name}}</h5>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </li>
                                @endforeach
                            </ul>

                            <div class="pagination pagination-lg">
                                {{$data->links('vendor.pagination.pagination')}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        



    

        <x-main_footer />
</div>
@endsection