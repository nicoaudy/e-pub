@extends('layouts.master')

@section('styles')
    <style rel="stylesheet">
        /* TEMPLATE STYLES */

        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .widget-wrapper {
            padding-bottom: 2rem;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 2rem;
        }

        .reviews {
            text-align: center;
            border-top: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            padding: 1rem;
            margin-top: 1rem;
            margin-bottom: 2rem;
        }

        .price {
            position: absolute;
            left: 0;
            top: 0;
            margin-top: -2px;
        }

        .price .tag {
            margin: 0;
        }
    </style>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('content')
<div class="container">
    <div class="breadcrumb">
        <ul>
            <a href="{{ url('/') }}">Home </a> /
            {{ $product->name }}
        </ul>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="widget-wrapper">
                <h4>Subscription form:</h4>
                <br>
                <div class="card">
                    <div class="card-block">
                        <p><strong>Subscribe to our newsletter</strong></p>
                        <p>Once a week we will send you a summary of the most useful news</p>
                        <div class="md-form">
                            <i class="fa fa-user prefix"></i>
                            <input type="text" id="form1" class="form-control">
                            <label for="form1">Your name</label>
                        </div>
                        <div class="md-form">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" id="form2" class="form-control">
                            <label for="form2">Your email</label>
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-wrapper">
                        <div class="view overlay hm-white-light z-depth-1-half">
                            <img src="{!! asset($product->image->image_path . $product->image->image_name) !!}"
                                 class="img-fluid img-responsive"
                                 style="height: 400px; width: 750px">
                            <div class="mask">
                            </div>
                            <h3 class="price pull-right"><span class="tag red darken-2">Rp. {{ number_format($product->price, 0, ',', '.') }}</span></h3>
                        </div>
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-book"></i> Cara Pembelian
                        </button>
                        <a href="" class="btn btn-primary btn-xs pull-right"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                        <br>

                        <h2 class="h2-responsive">{{ $product->name }}</h2>
                        <hr>
                        <p>{{ $product->description }}</p>

                        <ul class="rating inline-ul">
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="reviews">
                    <h2 class="h2-responsive">Reviews</h2>
                </div>
                <div class="media">
                    <a class="media-left" href="#">
                        <img class="img-circle" src="http://mdbootstrap.com/wp-content/uploads/2015/10/team-avatar-1.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">John Doe</h4>
                        <ul class="rating inline-ul">
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
                    </div>
                </div>
                <div class="media">
                    <a class="media-left" href="#">
                        <img class="img-circle" src="http://mdbootstrap.com/wp-content/uploads/2015/10/team-avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Dave Snow</h4>
                        <ul class="rating inline-ul">
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star amber-text"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Cara Pembelian</h4>
            </div>
            <!--Body-->
            <div class="modal-body">
                <ul>
                    <li>
                        1.
                    </li>
                    <li>
                        2.
                    </li>
                </ul>
            </div>
            <!--Footer-->
        </div>
        <!--/.Content-->
    </div>
</div>
@endsection
