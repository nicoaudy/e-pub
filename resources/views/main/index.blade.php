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
                    <img src="{!! asset($product->image->image_path . $product->image->image_name) !!}"
                         class="img-fluid img-responsive">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>
                <div class="card-block">
                    <h4 class="card-title">{!! \Illuminate\Support\Str::words($product->name, 3,'....')  !!}</h4>
                    <p class="card-text">{!! \Illuminate\Support\Str::words($product->description, 3,'....')  !!}</p>
                    <a href="/addProduct/{{ $product->id }}" class="btn btn-primary">Buy now for
                        Rp {{ number_format($product->price, 0, ',', '.') }}</a>
                </div>
            </div>
        </div>
    @endforeach
    <div class="pagination">
        {!! $products->render() !!}
    </div>
@endsection