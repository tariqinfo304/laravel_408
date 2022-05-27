<div class="col-lg-6">
    <nav class="header__menu">
        <ul>
            <li class="active"><a href="{{ URL('/web') }}">Home</a></li>
            <li><a href="{{ URL('/shop') }}">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="{{ URL('shop_detail') }}">Shop Details</a></li>
                    <li><a href="{{ URL('cart') }}">Shoping Cart</a></li>
                    <li><a href="{{ URL('checkout') }}">Check Out</a></li>
                    <li><a href="./blog-details.php">Blog Details</a></li>
                    <li><a href="{{ URL('product') }}">Product</a></li>
                </ul>
            </li>
            <li><a href="./blog.php">Blog</a></li>
            <li><a href="{{ URL('contact') }}">Contact</a></li>
        </ul>
    </nav>
</div>