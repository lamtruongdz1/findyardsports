@extends('layout.client.master')
@section('content')
<div class="yard-detail-image">
    <img src="{{$yard->img}}" alt="">
</div>
<section class="yard-detail">
<div class="yard-detail-heading">
    <h2>{{$yard->name}}</h2>
    <p><i class='bx bx-map' ></i>{{$yard->address}}</p>
</div>
<div class="yard-detail-content">
  <div class="yard-detail-left">
    <h1>Thông tin sân bóng</h1>
    <div class="yard-detail-title">
        <h2>{{$yard->name}}</h2>
    </div>
    <div class="yard-detail-location">
        <i class='bx bx-map' ></i><p>{{$yard->address}}</p>
    </div>
    <div class="yard-detail-type">
        <i class='bx bx-football bx-spin' ></i><p>Sân 5 - Sân 7 - sân 11</p>
    </div>
    <div class="yard-detail-times">
        <i class='bx bx-time-five' ></i><p>{{$yard->time_open}} - {{$yard->time_close}}</p>
    </div>
    <div class="yard-detail-phone">
        <i class='bx bx-mobile-alt bx-tada' ></i><p>0936 068 488</p>
    </div>
    <div class="yard-detail-phone">
        <i class='bx bxs-low-vision' ></i><p>{{ $yard->view }}</p>
    </div>
  </div>
  <div class="yard-detail-right">
    <h1>Loại sân</h1>
    <div class="yard-detail-list">
      <div class="yard-detail-item">
        <i class='bx bx-football'></i><p>14 sân 5</p>
      </div>
      <div class="yard-detail-item">
        <i class='bx bx-football'></i><p>2 sân 7</p>
      </div>
    </div>
    <div class="yard-detail-list">
      <div class="yard-detail-item">
        <h2>Trạng thái: còn sân</h2>
      </div>
      <div class="yard-detail-item">
        <a href="#" class="btn">Đặt sân</a>
    </div>
</div>
@foreach ($slots as $slot)
    <p>{{  $slot}}</p>
@endforeach
  </div>

</div>

<div class="yard-detail-images">
    <h1>Hình ảnh sân bóng</h1>
    <div class="yard-detail-list">
        <div class="yard-detail-item">
            <img src="{{$yard->img}}" alt="">
        </div>
        <div class="yard-detail-item">
            <img src="{{$yard->img}}" alt="">
        </div>
        <div class="yard-detail-item">
            <img src="{{$yard->img}}" alt="">
        </div>
    </div>
</div>
<div class="yard-detail-services">
    <h1>Dịch vụ</h1>
    <div class="yard-detail-list">
      <div class="yard-detail-item">
        <i class='bx bx-money'></i><p>Đặt cọc</p>
      </div>
      <div class="yard-detail-item">
        <i class='bx bx-wifi' ></i><p>wifi</p>
      </div>
      <div class="yard-detail-item">
        <i class='bx bx-spray-can'></i><p>Miễn phí trà đá</p>
      </div>
      <div class="yard-detail-item">
        <i class='bx bxs-parking' ></i><p>bãi đỗ xe</p>
      </div>
      <div class="yard-detail-item">
        <i class='bx bx-bath' ></i><p>Phòng tắm</p>
      </div>
      <div class="yard-detail-item">
        <i class='bx bx-medal'></i><p>Tổ chức giải đấu</p>
      </div>
    </div>
</div>
<div class="yard-detail-map">
  <h1>Bản đồ</h1>
  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.946620096234!2d106.69966154993976!3d10.815397092257287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175297f9c9a6a6f%3A0x31237a1f7815c8c!2zU8OibiBiw7NuZyDEkcOhIEFyZW5h!5e0!3m2!1svi!2s!4v1642425895302!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<div class="yard-detail-comments">
  <h1>Đánh giá</h1>
</div>
<div class="yard-detail-similar swiper">
  <h1>Sân trong khu vực</h1>
  <div class="swiper-wrapper">

@foreach ($yardLike as $item)
        <div class="swiper-slide">
      <div class="yard-detail-item">
        <div class="yard-detail-image">
          <img src="{{ $item->img }}" alt="">
        </div>
        <div class="yard-detail-text">
          <div class="yard-detail-type">
            <span>Sân 5 - sân 7</span>
          </div>
          <div class="yard-detail-price">
            <p>{{ $item->price }}.000 VND/giờ</p>
          </div>
        </div>
        <div class="yard-detail-maincontent">
          <h2 class="yard-detail-title">{{ $item->name }}</h2>
          <p class="yard-detail-location">{{ $item->address }}</p>
        </div>
      </div>
    </div>
@endforeach
  </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <br>  <br>
  <div class="swiper-pagination"></div>
</div>
</section>
@endsection
