@extends('layout.client.master')
@section('content')
      <!-- pay -->
      <section class="pay" id="pay">
        <h1>Thanh toán</h1>
        <div class="pay-list">
          <div class="pay-item">
              <div class="pay-image">
                <img src="{{ asset('frontend/images/chaolua.jpg') }}" alt="" class="pay-img">
              </div>
              <div class="pay-text">
                <div class="pay-type">
                  <label for="type">Loại sân:</label>
                  <select name="type" id="type">
                  <option value="Sân 5">Sân 5</option>
                  <option value="Sân 7">Sân 7</option>
                  <option value="sân 11">sân 11</option>
              </select>
                </div>
                <div class="pay-type">
                  <label for="type">Thời gian:</label>
                  <select name="type" id="type">
                  <option value="1 tiếng">1 tiếng</option>
                  <option value="1 tiếng 30">1 tiếng 30</option>
                  <option value="2 tiếng">2 tiếng</option>
              </select>
                </div>
                <div class="pay-price">
                  <p>250.000 VND/giờ</p>
                </div>
                  <h2 class="pay-title">Sân Chảo lửa</h2>
                  <p class="pay-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
              </div>

            </div>
          <div class="pay-item">
            <div class="pay-form">
              <form action="">
                  <input type="text" placeholder="Họ và tên" class="pay-control">
                  <input type="text" placeholder="Số điện thoại" class="pay-control">
                  <input type="text" placeholder="Email" class="pay-control">
              </form>
              <a href="{{ route('pay-detail') }}" class="btn">Đặt sân</a>
          </div>
          </div>
        </div>


      </section>
@endsection
