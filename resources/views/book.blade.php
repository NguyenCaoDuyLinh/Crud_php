@extends('layout')
@section('section')
<div class="body">
    <div class="sidebar">
        <ul class="nav-links">
            <li class="showMenu">
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Category</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu ">
                    <li><a class="link_name" href="#">Category</a></li>
                    @foreach ($cats as $cat)
                    <li><a href="#">{{$cat->Category_name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="showMenu">
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-book-alt'></i>
                        <span class="link_name">NXB</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu ">
                    <li><a class="link_name " href="#">NXB</a></li>
                    @foreach ($nxbs as $nxb)
                    <li><a href="#">{{$nxb->Publishing_Company_Name}}</a></li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
    <section class="home_product">
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
    </section>
</div>
@endsection