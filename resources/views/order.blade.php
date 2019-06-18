@extends('layouts.main')
@section('content')
    <form method="post" action="/order_success/" method="post">
        <div>
        <input type="text" name="customer_name" class="form-control"/>
        </div>
        <div>
        <input type="text" name="phone" class="form-control"/>
        </div>
        <div>
        <input type="text" name="city" class="form-control"/>
        </div>
        <div>
        <textarea class="form-control">Comment</textarea>
        </div>
        <div>
        <input type="number" name="amount" class="form-control"/>
        </div>

        <input type="hidden" value ="{{$goods_id}}" name="product_id"/>
        <input type="submit" value ="Order" class="btn-success"/>
    </form>
@endsection