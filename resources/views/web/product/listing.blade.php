@extends("web.layout.layout")

@section("title")
	Product Listing
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
                            <span>Product Listing</span>
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
                
                <h4> Product Listing <a style="float: right;" href="{{ URL('product/create') }}"><button class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp;Add Product</button><a/></h4>

                <div class="row">
                    {{ $list->links() }}
                    <br/>
                </div>
                
                <div class="row">
                

                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Image</th>
                          <th scope="col">Name</th>
                          <th scope="col">Price</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Description</th>
                          <th scope="col">Action</th>

                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($list as $row)
                            <tr>
                              <th scope="row">{{ $row->id }}</th>
                              <td><img width="200px" height="200px" 

                                src="{{ Asset($row->display_image) }}" alt="{{ $row->name }}" /></td>
                              <td>{{ $row->name }}</td>
                              <td>{{ $row->price }}</td>
                              <td>{{ $row->qty }}</td>
                              <td>{{ $row->description }}</td>
                              <td>
                                  
                                  <a href="{{ URL('product/'.$row->id.'/edit') }}"><i class="fa fa-edit"></i></a>
                                  &nbsp;&nbsp;&nbsp;&nbsp;
                                  <a href="{{ URL('product',$row->id) }}"><i class="fa fa-remove"></i></a>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection