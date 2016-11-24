<!--Main column-->
<div class="col-md-8">
    <!--First row-->
    <div class="row">
        <div class="col-md-12">
            <div class="divider-new">
                <h2 class="h2-responsive">What's new?</h2>
            </div>
            <!--Carousel Wrapper-->
            <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half"
                 data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-2" data-slide-to="1"></li>
                    <li data-target="#carousel-example-2" data-slide-to="2"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="http://mdbootstrap.com/images/ecommerce/slides/slide%20(1).jpg"
                             alt="First slide">
                        <div class="carousel-caption">
                            <h4>New collection</h4>
                            <br>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://mdbootstrap.com/images/ecommerce/slides/slide%20(2).jpg"
                             alt="Second slide">
                        <div class="carousel-caption">
                            <h4>Get discount!</h4>
                            <br>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="http://mdbootstrap.com/images/ecommerce/slides/slide%20(3).jpg"
                             alt="Third slide">
                        <div class="carousel-caption">
                            <h4>Only now for 10$</h4>
                            <br>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->

                <!--Controls-->
                <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="icon-prev" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-2" role="button"
                   data-slide="next">
                    <span class="icon-next" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </div>
    <!--/.First row-->
    <br>
    <hr class="extra-margins">

    <div class="row">
        @yield('content')
    </div>

</div>
<!--/.Main column-->