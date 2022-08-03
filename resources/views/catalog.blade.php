@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$catalog->name}}</div>
                    <div class="card-body">
                        @foreach($catalog->podcategories as $podcategory)
                            <a href="{{asset('catalog/'.$podcategory->id)}}"> {{$podcategory->name}}</a>
                        @endforeach
                        @foreach($catalog->products as $product)
                                <a href="{{asset('product/'.$product->id)}}">{{$product->name}}</a>
                            @if($product->picture)
                                <img src="{{asset('storage/'.$product->picture)}}">
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
