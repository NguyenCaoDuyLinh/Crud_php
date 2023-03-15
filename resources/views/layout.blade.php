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
        <a href="#" class="logo"><img src="{{ asset('/img/logo.jpg')}}" class="image-logo"></img>Duy Linh</a>
        <ul class="navlist">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#shop">News</a></li>
            <li><a href="#">Hots</a></li>
            <li><a href="#">Contact </a></li>
        </ul>
        <div class="nav-icons">
            <div class="search">
                <i class='bx bx-search'></i>
                <div class="input">
                    <input type="text" placeholder="Search" id="mysearch">
                </div>
                <i class='bx bx-x' onclick="document.getElementById('mysearch').value = ''"></i>
            </div>
            <a href=""><i class='bx bx-cart'></i></a>
            <a href=""><i class='bx bxs-user-account'></i></a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    @yield('section')
    <footer>
        <div class="container-f">
            <div class="sec aboutus">
                <a href="#" class="logo2"><img src="{{ asset('/img/logo.jpg')}}" class="image-logo"></img></a>
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
                    <li><span>© <script>
                                document.write(new Date().getFullYear())
                            </script> made with DL</span></li>
                </ul>
            </div>

        </div>
    </footer>

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
</body>

</html>