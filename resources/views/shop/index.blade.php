@extends('layouts.master')

@section('title')
    Laravel Shoping
@endsection

@section('content')
@foreach($products->chunk(3) as $productChunk)
<div class="row">
    @foreach($productChunk as $product)
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img data-src="holder.js/300x200" alt="300x200" src="{{ $product->imagePath }}" class="img-responsive">
            <div class="caption">
                <h3>{{ $product->title }}</h3>
                <p class="description">{{ $product->description }}</p>
                <div class="clearfix">
                    <div class="float-left price">${{ $product->price }}</div>
                    <a href="#" class="btn btn-success float-right">Action</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endforeach

@endsection