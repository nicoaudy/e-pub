@extends('layouts.master')

@section('home')
    @include('layouts.sidebar')
    @include('layouts.carousel')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('content')
    <form action="/" method="POST" class="form-group" style="text-align: center">
        {!! csrf_field() !!}
        <input type="text" name="search" value="{{ old('value') }}" class="form-control" placeholder="Type Here...">
        <button type="submit" class="btn btn-primary"><i class="fa fa-eye"></i> Search</button>
    </form>
    @forelse($products as $product)
        <div class="col-md-4">
            <div class="card">
                <div class="view overlay hm-white-slight">
                    <img src="{!! asset($product->image->image_path . $product->image->image_name) !!}"
                         class="img-fluid img-responsive">
                    <a href="{{ url('detail', $product->id) }}">
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
    @empty
        Result Not Found!
    @endforelse
    <div class="pagination">
        {!! $products->render() !!}
    </div>
@endsection