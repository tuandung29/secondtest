@extends('master')

@section('content')
    <div class="rev-slider">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer">
                    <div class="banner">
                        <ul>
                        @foreach($slide as $sl)
                            <!-- THE FIRST SLIDE -->
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                         data-zoomstart="undefined" data-zoomend="undefined"
                                         data-rotationstart="undefined"
                                         data-rotationend="undefined" data-ease="undefined"
                                         data-bgpositionend="undefined"
                                         data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                         data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                         data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                             data-bgposition="center center" data-bgrepeat="no-repeat"
                                             data-lazydone="undefined" src="source/image/slide/{{$sl->image}}"
                                             data-src="source/image/slide/{{$sl->image}}"
                                             style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat;
                                                 background-image: url('source/image/slide/{{$sl->image}}'); background-size: cover;
                                                 background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>

                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!--slider-->
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Sản phẩm mới</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{count($new_product)}} sản phẩm</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($new_product as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="{{route('chitietsp',$new->id)}}"><img
                                                        src="source/image/product/{{$new->image}}"
                                                        alt="" height="270px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$new->name}}</p>
                                                <p class="single-item-price">
                                                    <span>{{number_format($new->unit_price)}}</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left"
                                                   href="{{route('themgiohang',$new->id)}}"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('chitietsp',$new->id)}}">Details
                                                    <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                                <div class="row">
                                    {{$new_product->links()}}
                                </div>
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Top Products</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{count($products)}} sản phẩm</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach($products as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="{{route('chitietsp',$new->id)}}"><img
                                                        src="source/image/product/{{$new->image}}"
                                                        alt="" height="270px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$new->name}}</p>
                                                <p class="single-item-price">
                                                    <span>{{number_format($new->unit_price)}}</span>
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left"
                                                   href="{{route('themgiohang',$new->id)}}"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="{{route('chitietsp',$new->id)}}">Details
                                                    <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{--<div class="space40">&nbsp;</div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="source/assets/dest/images/products/1.jpg"
                                                                        alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">Sample Woman Top</p>
                                            <p class="single-item-price">
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="product.html">Details <i
                                                    class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>--}}
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
