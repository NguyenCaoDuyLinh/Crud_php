<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/style.css')}}">
    <!-- box icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- gg fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Bán sách</title>
</head>

<body>
    <header>
        <a href="#" class="logo"><img src="/img/logo.jpg" class="image-logo"></img>Duy Linh</a>
        <ul class="navlist">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#shop">News</a></li>
            <li><a href="#">Hots</a></li>
            <li><a href="#contact">Contact </a></li>
        </ul>
        <div class="nav-icons">
            <a href=""><i class='bx bx-search'></i></a>
            <a href=""><i class='bx bx-cart'></i></a>
            <a href=""><i class='bx bxs-user-account'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
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
    <section class="container">
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
    </section>
    <section class="shop" id="shop">
        <div class="middle-text">
            <h4>Our Shop</h4>
            <h2>Lets Check Popular Products</h2>
        </div>
        <div class="shop-content">
            @foreach ($products as $product)
            <div class="row">
                <img src="product/{{$product->Avatar}}">
                <h3>{{$product->Name}}</h3>
                <p>{{$product->Author}}</p>
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
    <footer>
        <div class="container-f">
            <div class="sec aboutus">
                <a href="#" class="logo2"><img src="/img/logo.jpg" class="image-logo"></img></a>
                <h2>Duy Linh</h2>
                <p>I am a student at The University of Danang - University of Technology and Education </p>
                <div class="social">
                    <li><a href=""><i class='bx bxl-facebook'></i></a></li>
                    <li><a href=""><i class='bx bxl-instagram-alt'></i></a></li>
                    <li><a href=""><i class='bx bxl-github'></i></a></li>
                    <li><a href=""><i class='bx bxl-twitter'></i></a></li>
                    <li><a href=""><i class='bx bxl-google'></i></a></li>
                </div>
            </div>
            <div class="sec contact">
                <h2>Contact me</h2>
                <ul class="info">
                    <li><i class='bx bx-location-plus'></i>02 Thanh Sơn, phường Thanh Bình, quận Hải Châu, Đà Nẵng</li>
                    <li><i class='bx bxl-gmail'></i>linhgood04@gmail.com</li>
                    <li><i class='bx bxs-phone'></i>(+84) 898 522 390</li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>©<script>
                document.write(new Date().getFullYear())
            </script>, made with Duy Linh</p>
    </div>
    <a href="" class="scroll"><i class='bx bxs-up-arrow-alt'></i></a>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/simple.money.format.js')}}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "cards",
            grabCursor: true,
        });
    </script>
    <script type="text/javascript">
        $('.format-price').simpleMoneyFormat();
    </script>
</body>

</html>