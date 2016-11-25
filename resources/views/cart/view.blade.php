@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td>
                                <div class="media">
                                    <a class="thumbnail pull-left" href="#">
                                        <img class="media-object" src="{{$item->product->imageurl}}" style="width: 100px; height: 72px;">
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">{{$item->product->name}}</a></h4>
                                    </div>
                                </div>
                            </td>
                            <td><strong>Rp. {{ number_format($item->product->price, 0, ',', '.') }}</strong></td>
                            <td>
                                <a href="/removeItem/{{$item->id}}">
                                    <button type="button" class="btn btn-danger">
                                        <span class="fa fa-remove"></span> Remove
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>
                                <h3>Total</h3>
                            </td>
                            <td>
                                <h4>
                                    <strong>Rp {{ number_format($total * 10000, 0, ',', '.') }}</strong> |
                                    <strong>$ {{ $total }}</strong>
                                </h4>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>
                            <a href="/">
                                <button type="button" class="btn btn-default">
                                    <span class="fa fa-shopping-cart"></span> Continue Shopping
                                </button>
                            </a>
                        </td>
                        <td class="col-md-2">
                            <form action="/checkout" method="POST">
                                {!! csrf_field() !!}
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_hkKvEhQfBdWxrrcl2df2jyi3"
                                        data-amount="{{ $total }}"
                                        data-name="NicoDev"
                                        data-description="Products"
                                        {{-- data-image="/128x128.png" --}}
                                        data-locale="auto">
                                </script>
                            </form>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection