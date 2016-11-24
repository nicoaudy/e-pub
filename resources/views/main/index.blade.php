@extends('layouts.master')

@section('home')
    @include('layouts.sidebar')
    @include('layouts.carousel')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('content')
    @foreach ($products as $product)
        <div class="col-md-4">
            <div class="card">
                <div class="view overlay hm-white-slight">
                    <img src="http://mdbootstrap.com/images/ecommerce/reg/reg%20(19).jpg"
                         class="img-fluid img-responsive">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>
                <div class="card-block">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="/addProduct/{{$product->id}}" class="btn btn-primary">Buy now for
                        Rp {{ number_format($product->price, 0, ',', '.') }}</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection