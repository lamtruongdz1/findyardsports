@extends('layout.client.master')
@section('content')
      <!-- pay -->
      <section class="pay" id="pay">
        <h1>Thanh toán</h1>
        <div class="pay-list">
          <div class="pay-item-info">
            <div class="pay-info">
              <h2>Thông tin người đặt</h2>
            </div>
            <form action="">
              <div class="form-group">
                <label for="name">tên</label>
                <input type="text" id="name" required >
              </div>
              <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" id="phone" required >
              </div>
            </form>
            <div class="pay-meth">
              <h2>Phương thức thanh toán</h2>
            </div>
            <div class="pay-check">
              <input type="radio" id="cash" name="payment-check" value="online" checked>
              <label for="" id="cash">Thanh toán online</label>
              <p>Được đảm bảo hoàn toàn bởi Find Yard Sports</p>
            </div>
          </div>
          <div class="pay-item-yard">
            <div class="pay-yard">
              <div class="pay-info-yard">
                <h2>Sân bóng Đại học Nông Lâm</h2>
                <p>Đại học Nông Lâm, khu phố 6, P. Linh Trung, Quận Thủ Đức</p>
                <img src="images/footballarena.jpg" alt="">
                <div class="stars">
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star' ></i>
                  <i class='bx bxs-star-half' ></i>
                </div>
                <div class="pay-type">
                  <i class='bx bxs-user-detail'></i> <p>Sân 5</p>
                </div>
                <div class="pay-time">
                  <i class='bx bx-calendar-alt'></i> <p>Thứ Năm, 07-04-2022</p>
                </div>
                </div>
                <table>
                  <tr>
                    <th class="pay-mon">Giá thuê sân</th>
                    <th class="pay-price">180.000 VNĐ</th>
                  </tr>
                  <tr>
                    <th class="pay-mon">Phí dịch vụ (10%)</th>
                    <th class="pay-price">10.000 VNĐ</th>
                  </tr>
                </table>
                <table>
                  <tr>
                    <th class="pay-total">Tổng cộng:</th>
                    <th class="pay-total-price">190.000 VNĐ</th>
                  </tr>
                </table>
            </div>
            </div>

         </div>
         <a href="" class="btn">Đặt sân</a>
        </div>
        </div>


      </section>
        <!-- end pay -->
        @endsection
