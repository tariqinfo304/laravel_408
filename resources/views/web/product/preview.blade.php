@extends("web.layout.layout")

@section("title")
    {{ $title }}
@endsection

@section("header")
    @include("web.layout.header")
@endsection


@section("main-content")

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ Asset('img/breadcrumb.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="{{ URL('web') }}">Home</a>
                            <span>{{ $title }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <h4>

                Delete
                Product</h4>

                    <form action="{{ URL('product',$id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{ $id}}"/>
                        @method("delete")
           

                    @csrf()
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Product Name<span>*</span></p>
                                        <input value="{{ !empty($id) ? $obj->name : old('name') }}" disabled name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Price<span>*</span></p>
                                        <input value="{{ !empty($id) ? $obj->price : old('price') }}" disabled name="price" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Quantity<span>*</span></p>
                                <input disabled value="{{ !empty($id) ? $obj->qty :  old('qty') }}"  name="qty" type="number">
                            </div>
                            <div class="checkout__input">
                                <p>Description<span>*</span></p>
                                <input  disabled value="{{ !empty($id) ? $obj->description : old('description') }}" name="description" type="text">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          
                <input class="btn btn-primary" type="submit" value="Delete Product" />
                             
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection