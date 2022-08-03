@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a class="card">
                    <div class="card-header"><a href="{{asset('catalog/'.$product->catalog_id)}}"> {{$product->catalog->name}}</a> {{$product->name}}</div>
                    <div class="card-body">
                        @if($product->picture)
                            <img src="{{asset('storage/'.$product->picture)}}">
                        @endif
                    {!!$product->body!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
