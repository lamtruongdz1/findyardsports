<!-- begin header -->
<header class="header" id="header">
    <div class="navbar">
        <div class="logo">
            <a href="/"><img src="{{ asset('frontend/images/logo.png') }}" alt="" /></a>
        </div>
        <ul class="menu">
            <li><a href="/">trang chủ</a></li>
            <li><a href="/san">Đặt sân</a></li>
            <li><a href="">Liên hệ</a></li>

        </ul>
        @guest

            <div class="login">
                <a href="{{ route('partner.index') }}">Dành cho chủ sân</a>
                <a href="{{ route('login') }}">Đăng nhập</a>
                <a href="{{ route('register') }}">Đăng ký</a>
            </div>
        @endguest
        @auth
            <div class="login">
                <a href="">Lịch sử đặt sân</a>
                <a href="{{ route('profile.show') }}">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Đăng xuất') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endauth
        <div id="menuBar" class="icons bx bx-menu"></div>
    </div>
</header>
<!-- header end -->
