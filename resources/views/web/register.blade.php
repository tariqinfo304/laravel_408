@extends("web.layout.layout")

@section("title")
    Register User
@endsection

@section("header")
    @include("web.layout.header")
@endsection


@section("main-content")
    

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                
                <div class="row">
                
                        <form method="POST" acction="{{ URL('add_user') }}">
                            @csrf()

                            <div class="form-group">
                                 <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                            @error("name")
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                            </div>
                          <div class="form-group">
                           

                            <label for="exampleInputEmail1">Email address</label>
                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                            @error("username")
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            @error("password")
                                <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                          </div>
                          <button type="submit" class="btn btn-primary">Add User</button>
                        </form>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection