@extends('layouts.main')
@section('content')
    @foreach($goods as $good)
        <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="product-thumb">
                <div class="image"><a href="/goods/{{$good->url}}">
                        @if($good->image=='')
                            <img src="/image/noimage.png" alt="{{$good->name}}" class="img-responsive">
                        @else
                            <img src="/image/goods/{{$good->image}}" alt="{{$good->name}}" class="img-responsive">
                        @endif

                    </a></div>
                <div>
                    <div class="caption">
                        <h4><a href="/goods/{{$good->url}}">{{$good->name}}</a></h4>
                        <p class="price"> <span class="price-new">{{$good->price}}</span> грн</p>
                    </div>
                    <div class="button-group">
                        <!--button class="btn-success" type="button" onclick="cart.add({{$good->id}});"><span class="hidden-xs hidden-sm hidden-md">Add to Cart</span></button-->
                    </div>
                </div>
            </div>
        </div>

    @endforeach
@endsection