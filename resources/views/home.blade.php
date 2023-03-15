@extends('layout')
@section('section')
<section class="home" id="home">
    <div class="home-text">
        <h1>If you only read the books that everyone else is reading, you can only think what everyone else is thinking.<br></h1>
        <h1 class="author">– Haruki Murakami</h1>
        <a href="#" class="btn">Explore...<i class='bx bxs-right-arrow'></i></a>
        <a href="#" class="btn1">Buy Now</a>
    </div>
    <div class="home-img">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($products as $product)
                <div class="swiper-slide"><img src="product/{{$product->Avatar}}"></div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- container -->
<!-- <section class="container">
        <div class="container-box">
            <img src="/img/c1.png">
            <h3>8:00 am - 22:00 pm</h3>
            <a href="#">Working Hours</a>
        </div>
        <div class="container-box">
            <img src="/img/c2.png">
            <h3>Books Address</h3>
            <a href="#">Get Directions</a>
        </div>
        <div class="container-box">
            <img src="/img/c3.png">
            <h3>(+84) 898 522 390</h3>
            <a href="#">Call Me</a>
        </div>
    </section> -->
<section class="shop" id="shop">
    <div class="middle-text">
        <h4>Our Shop</h4>
        <h2>Lets Check Popular Products</h2>
    </div>
    <div class="shop-content">
        @foreach ($products as $product)
        <div class="row">
            <img class="img_product" src="product/{{$product->Avatar}}">
            <h3 class="name_product">{{$product->Name}}</h3>
            <p class="name_author">{{$product->Author}}</p>
            <div class="in-text">
                <div class="price">
                    <h6 class="format-price">{{number_format($product->Price)}} VNĐ</h6>
                </div>
                <div class="s-btnn">
                    <a href="#">Buy Now</a>
                </div>
            </div>
            <div class="top-icon">
                <a href=""><i class='bx bx-heart'></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row-btn">
        <a href="#" class="btn">All Books<i class='bx bxs-right-arrow'></i></a>
    </div>
</section>
@endsection()