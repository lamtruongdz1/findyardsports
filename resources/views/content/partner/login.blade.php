@extends('layout.client.master')
@section('content')
<section class="yard-login">
    <div class="form-box">
        <div class="button-box">
            <center><h1 class="heading-title">Đăng nhập</h1></center>

        </div>
        <div class="logo">
            <img src="{{ asset('frontend/images/logo.png') }}"  alt="">
        </div>
        <form action="{{ route('partner.getLogin') }}" method="post" id="login" class="input-group">
            @csrf
            <input type="text" name="email" class="input-field" placeholder="Email" required>
            <input type="password" name="password" class="input-field" placeholder="nhập mật khẩu" required>
            <input type="checkbox" class="checkbox"><span>nhớ mật khẩu</span>
            <button type="submit" class="submit-btn">đăng nhập</button>
        </form>
    </div>
</section>

@endsection
