@extends('layout.client.master')
@section('content')
@csrf
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
            <h2>{{$yard->name}}</h2>
            <p>{{$yard->address}}</p>
            <div class="stars">
              <i class='bx bxs-star' ></i>
              <i class='bx bxs-star' ></i>
              <i class='bx bxs-star' ></i>
              <i class='bx bxs-star' ></i>
              <i class='bx bxs-star-half' ></i>
            </div>
            <div class="pay-type">
                <label for="type">Loại sân:</label>
                <select name="type" id="type">
                @foreach($typeyard as $tyya)
                  <option value="{{$tyya->type}}">{{$tyya->name}}</option>
                @endforeach
                </select>
            </div>
            <div class="pay-time">
                <label for="type">Thời gian:</label>
                <select name="type" id="datsan">
                @foreach ($slots as $slot)
                <option  value="{{ $slot }}">{{ $slot }}</option>
                @endforeach
            </select>
            </div>
            </div>
            <table>
              <tr>
                <th class="pay-mon">Giá thuê sân</th>
                <th class="pay-price">{{ $yard->price }}.000 VNĐ/h</th>
              </tr>
              <tr>
                <th class="pay-mon">Phí dịch vụ (10%)</th>
                <th class="pay-price">{{ $services_cost }}00 VNĐ</th>
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

</section>
      <!-- pay -->
      {{-- <section class="pay" id="pay">
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
                  @foreach($typeyard as $tyya)
                    <option value="{{$tyya->id}}">{{$tyya->name}}</option>
                  @endforeach
                  </select>
                </div>
                <div class="pay-type">
                  <label for="type">Thời gian:</label>
                  <select name="type" id="datsan">
                  @foreach ($slots as $slot)
                  <option  value="{{ $slot }}">{{ $slot }}</option>
                  @endforeach
              </select>
                </div>
                <div class="pay-price">
                  <p id="tien" data-tien="{{$yard->price}}000">{{$yard->price}}.000đ/giờ</p>
                </div>
                  <h2 class="pay-title" >{{$yard->name}}</h2>
                  <p class="pay-location">{{$yard->address}}</p>
              </div>

            </div>
          <div class="pay-item">
            <div class="pay-form">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
              <form action="">
                  <input type="text" placeholder="Họ và tên" class="pay-control" id="hovaten">
                  <input type="text" placeholder="Số điện thoại" class="pay-control" id="sodienthoai">
                  <input type="text" placeholder="Email" class="pay-control" id="email">
              </form>
              <a type="button" class="btn" id="btnclick">Đặt sân</a>
          </div>
          </div>
        </div>


      </section> --}}
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<script>
          jQuery(document).ready(function($){
            $('#btnclick').on('click', function(){
                var datesan = $('#datsan').val();
                var idsan = $('#type').val();
                var price = $('#tien').data('tien');
                var tenname = $('.pay-title').text();
                var tenaddress = $('.pay-location').text();
                var hovaten = $('#hovaten').val();
                var sodienthoai = $('#sodienthoai').val();
                var email = $('#email').val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:'{{url("/thanh-toan-san")}}',
                    method:"post",
                    dataType:"JSON",
                    data:{idsan:idsan,datesan:datesan,price:price,tenname:tenname,hovaten:hovaten,sodienthoai:sodienthoai,email:email,tenaddress:tenaddress,_token:_token},
                    success:function(data)
                    {
                      if(data == 'done')
                        {
                            alertify.success('đặt hàng thành công');
                        }
                    }
                });
            });
          });
      </script>
