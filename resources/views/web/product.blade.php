@extends("web.layout.layout")

@section("title")
	Product
@endsection


@section("header")
	@include("web.layout.header")
@endsection


@section("main-content")
	
	    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Product Listing</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <span>Product Listing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
@endsection