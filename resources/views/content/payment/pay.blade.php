@extends('layout.client.master')
@section('content')
@csrf
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
                  <p id="tien" data-tien="{{$yard->price}}">{{$yard->price}}đ/giờ</p>
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


      </section>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
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
                      if(data = 'done'){
                        alert('thành công');
                      }
                    }
                });
            });
          });
      </script>
