@extends('master')

@section('content')
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>Search</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">Tìm thấy {{count($pro)}} sản phẩm</p>
                                <div class="clearfix"></div>
                            </div>

                            <div class="row">
                                @foreach($pro as $new)
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
                                                <a class="beta-btn primary" href="product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
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
    </div>

@endsection
