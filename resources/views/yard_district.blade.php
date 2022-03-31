@extends('layout.client.master')
@section('content')
<section class="booking-options">
</section>
<section class="yard" id="yard">
    <div class="heading">
        <h1 class="heading-title">có 200 sân tại quận <span>{{ $districts->name }}</span></h1>
    </div>
    <div class="yard-list">
        @foreach ($yards as $yard)
            <div class="yard-item">
                <div class="yard-image">
                    <img src="{{ $yard->img }}" alt="" class="yard-img">
                </div>
                <div class="yard-text">
                    <div class="yard-type">
                        <span>Sân 5 - sân 7</span>
                    </div>
                    <div class="yard-price">
                        <p>{{ $yard->price }}.000VNĐ/giờ</p>
                    </div>
                </div>
                <div class="yard-content">
                    <h2 class="yard-title">{{ $yard->name }}</h2>
                    <p class="yard-location">{{ $yard->address }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection
