<div class="header">
    <a href={{ route('index') }}><img style="height: 70px; width:170px" src="{{ asset('assets/images/logo_web_home.png') }}" alt=""></a>
    <div class="search-bar-looking-for">
        <input type="search" name="" id="" placeholder="What are you looking for?">
        <img src="{{ asset('assets/images/loupe 1.png') }}" alt="">
    </div>
    <div class="home-listings-blog">
        <a href={{ route('index') }} id="home">Home</a>
        <a href={{ route('tours.index') }} id="listings">Listings</a>
        <a href="W02-blog.html" id="blog">Blog</a>
        @if(Auth::check())
            <!-- Hiển thị nếu người dùng đã đăng nhập -->
            <a href="{{route('account')}}" id="account">{{ Auth::user()->name }}</a>
            <a href="{{route('logout')}}" id="a_logout">Log out</a>
        @else
            <!-- Hiển thị nếu người dùng chưa đăng nhập -->
            <a href="{{route('login')}}" id="login">Log in</a>
            <a href="{{route('register')}}" id="register">Register</a>
        @endif
    </div>
</div>
