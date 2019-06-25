@extends('layouts.main')
@section('content')

    <div id="product-product" class="container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <div class="row"> <div class="col-sm-8">
                        @if($good->image=='')
                            <img src="/image/noimage.png" alt="{{$good->name}}" class="img-responsive">
                        @else
                            <img src="/image/goods/{{$good->image}}" title="MacBook" alt="MacBook" class="product_image">
                        @endif

                        <div id="tab-description">
                            <p>{{$good->description}}</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h1>{{$good->name}}</h1>
                        <ul class="list-unstyled">
                            <li>Артикул: {{$good->article}}</li>
                        </ul>
                        <ul class="list-unstyled">
                            <li>
                                <h2>{{$good->price}} грн</h2>
                            </li>

                        </ul>
                        <div id="product"> <div class="form-group">
                                <form action="/order" method="POST" role="order">
                                    {{ csrf_field() }}
                                    <label class="control-label" for="input-quantity">Кількість</label>
                                    <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control">
                                    <input type="hidden" name="goods_id" class="form-control" value="{{$good->id}}">
                                    <br>
                                    <input type="submit" value ="Купити" class="btn-success">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection