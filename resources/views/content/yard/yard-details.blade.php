@extends('layout.client.master')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')
    <div class="yard-detail-image">
        <img src="{{ $yard->img }}" alt="">
    </div>
    <section class="yard-detail">
        <div class="yard-detail-heading">
            <h2>{{ $yard->name }}</h2>
            <p><i class='bx bx-map'></i>{{ $yard->address }}</p>
        </div>
        <div class="yard-detail-content">
            <div class="yard-detail-left">
                <h1>Thông tin sân bóng</h1>
                <div class="yard-detail-title">
                    <h2>{{ $yard->name }}</h2>
                </div>
                <div class="yard-detail-location">
                    <i class='bx bx-map'></i>
                    <p><a href="https://www.google.com/maps/search/{{ $yard->address }}">{{ $yard->address }}</a></p>
                </div>
                <div class="yard-detail-type">
                    <i class='bx bx-football bx-spin'></i>
                    <p>Sân 5 - Sân 7 - sân 11</p>
                </div>
                <div class="yard-detail-times">
                    <i class='bx bx-time-five'></i>
                    <p>{{ $yard->time_open }} - {{ $yard->time_close }}</p>
                </div>
                <div class="yard-detail-phone">
                    <i class='bx bx-mobile-alt bx-tada'></i>
                    <p>0936 068 488</p>
                </div>
                <div class="yard-detail-phone">
                    <i class='bx bxs-low-vision'></i>
                    <p>{{ $yard->view }}</p>
                </div>
            </div>
            <div class="yard-detail-right">
                <h1>Loại sân</h1>
                <div class="yard-detail-list">
                    <div class="yard-detail-item">
                        <i class='bx bx-football'></i>
                        <p>14 sân 5</p>
                    </div>
                    <div class="yard-detail-item">
                        <i class='bx bx-football'></i>
                        <p>2 sân 7</p>
                    </div>
                </div>
                <br>
                <h2>Giá tiền </h2>
                <div class="yard-detail-list">
                    <div class="yard-detail-item">
                        <i class='bx bx-money'></i>
                        <p>{{ $yard->price }}.000 VNĐ/H</p>
                    </div>
                    <div class="yard-detail-item">
                        <i class='bx bx-money'></i>
                        <p>10% Phí dịch vụ</p>
                    </div>
                </div>
                <div class="yard-detail-list">
                    <h4>Thời gian sân còn trống trong ngày hôm nay {{ date('d/m/Y') }}</h4>
                    </h2>
                    <div class="yard-detail-item">
                        @foreach ($slots as $slot)
                            <button
                                style="font-size: small; letter-spacing: .1em; text-transform: none; font-weight: normal;"
                                class="button-time" type="submit">
                                <strong data-slot="{{ $slot }}"
                                    id="strongslot">{{ $slot->format('H:i') }}</strong>
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="yard-detail-list">
                    <div class="yard-detail-item">
                        <!-- <a href="{{ route('datsan', $yard->slug) }}" class="btn">Đặt sân</a> -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            data-bs-whatever="@mdo">Đặt sân</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="yard-detail-images">
            <h1>Hình ảnh sân bóng</h1>
            <div class="yard-detail-list">
                <div class="yard-detail-item">
                    <img src="{{ $yard->img }}" alt="">
                </div>
                <div class="yard-detail-item">
                    <img src="{{ $yard->img }}" alt="">
                </div>
                <div class="yard-detail-item">
                    <img src="{{ $yard->img }}" alt="">
                </div>
            </div>
        </div>
        <div class="yard-detail-services">
            <h1>Dịch vụ</h1>
            <div class="yard-detail-list">
                <div class="yard-detail-item">
                    <i class='bx bx-money'></i>
                    <p>Đặt cọc</p>
                </div>
                <div class="yard-detail-item">
                    <i class='bx bx-wifi'></i>
                    <p>wifi</p>
                </div>
                <div class="yard-detail-item">
                    <i class='bx bx-spray-can'></i>
                    <p>Miễn phí trà đá</p>
                </div>
                <div class="yard-detail-item">
                    <i class='bx bxs-parking'></i>
                    <p>bãi đỗ xe</p>
                </div>
                <div class="yard-detail-item">
                    <i class='bx bx-bath'></i>
                    <p>Phòng tắm</p>
                </div>
                <div class="yard-detail-item">
                    <i class='bx bx-medal'></i>
                    <p>Tổ chức giải đấu</p>
                </div>
            </div>
        </div>
        {{-- <div class="yard-detail-map">
            <h1>Bản đồ</h1>
            <iframe class="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.946620096234!2d106.69966154993976!3d10.815397092257287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175297f9c9a6a6f%3A0x31237a1f7815c8c!2zU8OibiBiw7NuZyDEkcOhIEFyZW5h!5e0!3m2!1svi!2s!4v1642425895302!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div> --}}
        <div class="yard-detail-comments">
            <div class="be-comment-block">
                <h1 class="comments-title">Bình luận :  ({{ $total_comment }})</h1>
                @foreach ($comments as $comment)
                    <div class="be-comment">
                        <div class="be-img-comment">
                            <a href="blog-detail-2.html">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
                            </a>
                        </div>
                        <div class="be-comment-content">

                            <span class="be-comment-name">
                                <a href="">{{ $comment->user->name }}</a>
                            </span>
                            <span class="be-comment-time">

                                {{ $comment->created_at->format('d-m-Y H:i') }}
                            </span>

                            <p class="be-comment-text">
                                {{ $comment->description }}
                            </p>
                        </div>
                @endforeach
            </div>
            <form class="form-block" method="post" action="{{ route('comment.add') }}">
                @csrf
                <input type="hidden" name="yard_id" value="{{ $yard->id }}" />
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea class="form-input" name="description" required="" placeholder="Viết bình luận tại đây ..."></textarea>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Gửi" />
                </div>
            </form>
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
        </div>
    </section>












    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đặt sân</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">


                    <form action="{{ route('thanhtoansan') }}" method="POST" role="form" style="min-width: 100%;">
                        @csrf
                        <input class="inputbox textmuted" type="hidden" value="{{ $yard->id }}" name="yard_id"
                            id="yard_id">
                        <div class="row">
                            <div class="col-md-2 pe-0 col-sm-12">
                                <div class=" radio-btn mb-3"> <label> <input type="radio" value="1" id="yard_type"
                                            name="yard_type" checked> sân 5 <span></span> </label> </div>
                            </div>
                            <div class="col-md-2 pe-0 col-sm-12">
                                <div class=" radio-btn mb-3"> <label> <input type="radio" value="1.5" id="yard_type"
                                            name="yard_type"> sân 7 <span></span> </label> </div>
                            </div>
                            <div class="col-md-2 pe-0 col-sm-12">
                                <div class=" radio-btn mb-3"> <label> <input type="radio" value="2" id="yard_type"
                                            name="yard_type"> sân 11 <span></span> </label> </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-12">
                                <label> Thời gian đặt</label>
                                <select class="form-select" name="time_da" id="time_da"
                                    style="font-size:1.7rem; margin-bottom:15px">
                                    {{-- <option value="1">selected>Thời gian </option> --}}
                                    <option value="1" selected>1 giờ</option>
                                    <option value="1.5">1,5 giờ</option>
                                    <option value="2">2 giờ</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Họ Và tên</p>
                                    <input class="inputbox" placeholder="Họ và tên" type="text" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <div class="form-control d-flex flex-column">
                                    <p class="h-blue">Số Điện Thoại</p> <input class="inputbox"
                                        placeholder="Số điện thoại" type="text" name="phone" id="phone">
                                </div>
                            </div>
                            <div class="col-md-12 mb-12">
                                <div class="form-control d-flex flex-column">
                                <label>Email</label>
                                <input class="inputbox" placeholder="Email" type="email" name="email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-4">
                                <label for="">Ngày đặt</label>
                                <select class="form-select" name="date" id="date"
                                    style="font-size:1.7rem; margin-bottom:15px">
                                    @foreach ($period as $date)
                                        <option value="{{ $date->format('Y-m-d') }}" selected>
                                            {{ $date->format('d-m-Y') }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 col-12 mb-4">
                                <label for="">Giờ đặt</label>
                                <select class="form-select" name="time" id="time"
                                    style="font-size:1.7rem; margin-bottom:15px">
                                    @foreach ($slots as $slot)
                                        <option value="{{ $slot->format('H:i') }}" selected>{{ $slot->format('H:i') }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <input class="inputbox textmuted" type="hidden" name="address" value="{{ $yard->address }}"
                                name="address" id="address">
                            <input class="inputbox textmuted" type="hidden" name="price" value="{{ $yard->price }}000"
                                name="price" id="price">
                        </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary" style="padding:1rem 3rem; font-size:1.5rem"
                        id="btnclick">Đặt sân</button>
                    <form action="{{ url('/vnpay') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary" name="redirect"
                            style="padding:1rem 3rem; font-size:1.5rem">thanh toán vnpay </button>
                    </form>

                </div>


                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        jQuery(document).ready(function($) {
            $(document).on('click', '#strongslot', function() {
                var time = $(this).data('slot');
                var _token = $('input[name="_token"]').val();
                // $.ajax({
                //         url:'{{ route('themtimesan') }}',
                //         type:"post",
                //         data:{
                //             time:time,_token:_token
                //         },
                //         success:function(data){
                //             if(data = 'done'){
                //                 alert('themthanhcong');
                //             }
                //         }
                // });
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
<script>
    jQuery(document).ready(function($) {
        $('#btnclick').on('click', function(e) {
            e.preventDefault();
            var yard_id = $('#yard_id').val();
            var email = $('#email').val();
            var yard_type = $('#yard_type').val();
            var time_da = $('#time_da').val();
            var price = $('#price').val();
            var address = $('#address').val();
            var date = $('#date').val();
            var time = $('#time').val();
            var name = $('#name').val();
            var phone = $('#phone').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{ route('thanhtoansan') }}',
                method: "post",
                dataType: "JSON",
                data: {
                    yard_id: yard_id,
                    email: email,
                    yard_type: yard_type,
                    time_da: time_da,
                    price: price,
                    address: address,
                    date: date,
                    time: time,
                    name: name,
                    phone: phone,
                    _token: _token
                },
                success: function(data) {
                    if (data == 'done') {
                        alertify.success('đặt hàng thành công');
                    }
                }
            });
        });
    });
</script>
