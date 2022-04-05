@extends('layout.client.master')
@section('content')
      <!-- pay -->
      <section class="pay" id="pay">
        <h1>Thanh toán</h1>
        <div class="pay-list">
          <div class="pay-item">
              <div class="pay-image">
                <img src="{{asset('frontend/images/chaolua.jpg')  }}" alt="" class="pay-img">
              </div>
              <div class="pay-text">
                <div class="pay-type">
                  <label for="type">Loại sân:</label>
                  <select name="type" id="type">
                  <option value="Sân 5">Sân 5</option>
                </select>
                </div>
                <div class="pay-time">
                    <label for="times">Thời gian:</label>
                    <select name="times" id="times">
                    <option value="1 tiếng">1 tiếng</option>
                  </select>
                  </div>
                <div class="pay-total">
                    <p>Tổng tiền</p>
                </div>
                <div class="pay-price">
                  <p>250.000 VND/giờ</p>
                </div>
                  <h2 class="pay-title">Sân Chảo lửa</h2>
                  <p class="pay-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
              </div>
            </div>
          </div>
          <a href="" class="btn">Đặt sân</a>
        </div>


      </section>
@endsection
