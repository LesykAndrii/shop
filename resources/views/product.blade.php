@extends('layouts.main')
@section('content')

            <p>{{$good->name}}</p>
            <p>{{$good->article}}</p>
            <p>{{$good->description}}</p>
            <p>{{$good->price}}</p>
            <p>{{$good->name}}</p>
        <form action="/order/{{$good->id}}">
            <input type="submit" value ="Order" class="btn-success"/>
		</form>

@endsection