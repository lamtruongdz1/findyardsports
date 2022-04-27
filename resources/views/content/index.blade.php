    @extends('layout.client.master')
    @section('title', 'Trang Chủ')
    @section('content')
        <section class="booking-bar">
            <div class="booking-list">
                <div class="booking-item" data-aos="fade-up" data-aos-duration="1000">
                    <div class="booking-content">
                        <h1>Football Yard System</h1>
                        <h3>Tìm đối thủ nhanh chóng - <span>Uy tín - Chất lượng</span></h3>
                        <p class="btn">cáp kèo ngay</p>
                    </div>
                    <form action="/search" method="GET" class="booking-bar-form">
                        <div class="input-name form-group">
                            <input type="text" name="name" id="name" placeholder="tên sân bóng" class="form-control"
                                autocomplete="off" />
                        </div>
                        <div class="input-date form-group">
                            @if ($errors->first('date'))
                                <span class="error-message">
                                    <x-bx-error class='icon' />
                                    {{ $errors->first('date') }}
                                </span>
                            @endif

                            <select class="form-select" name="date" id="date">
                                <option value="" selected>Chọn Ngày</option>
                                @foreach ($period as $date)
                                    <option value="{{ $date->format('Y-m-d') }}">
                                        {{ $date->format('d-m-Y') }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="input-time form-group">
                            @if ($errors->first('date'))
                                <span class="error-message">
                                    <x-bx-error class='icon' />
                                    {{ $errors->first('time') }}
                                </span>
                            @endif
                            <select class="form-select" name="time" id="time">
                                <option value="" selected>Chọn thời gian</option>
                                @foreach ($slots as $slot)
                                    <option value="{{ $slot->format('H:i') }}">
                                        {{ $slot->format('H:i') }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-btn">
                            <input type="submit" class="btn" value="tìm kiếm" />
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </section>
        <!-- about section end -->
        <!-- yard section start -->
        <section class="category" id="category">
            <div class="category-heading" data-aos="fade-up" data-aos-duration="1000">
                <div class="heading-title">
                    <h1 class="heading-title">Tìm sân <span>theo quận</span></h1>
                </div>
                <div class="heading-title-all">
                    <a href="/san/tim">
                        <h2 class="heading-title-all">xem tất cả sân</h2>
                    </a>
                    <i class='bx bx-chevrons-right'></i>
                </div>
            </div>
            <div class="category-list swiper" data-aos="fade-left" data-aos-duration="1000">
                <div class="swiper-wrapper">
                    @foreach ($districts as $district)
                        <div class="swiper-slide">
                            <a href="/san-bong/{{ $district->slug }}">
                                <div class="category-item">
                                    <img src="{{ asset('frontend/images/san1.jpg') }}" alt="" class="category-img">
                                    <div class="category-text">
                                        <h2 class="category-title">{{ $district->name }}</h2>
                                        @foreach ($count as $item)
                                            @if ($district->name === $item->name)
                                                @isset($item->count)
                                                    <p class="count">{{ $item->count }} sân</p>
                                                @endisset
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <br><br>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- yard section end -->
        <!-- yard hot section start-->
        <section class="yard-hot" id="yard-hot">
            <div class="yard-hot-heading" data-aos="fade-up" data-aos-duration="1000">
                <div class="heading-title">
                    <h1 class="heading-title">Sân nhiều <span>người đặt</span></h1>
                </div>
                <div class="heading-title-all">
                    <a href="san/tim">
                        <h2 class="heading-title-all">xem tất cả</h2>
                    </a>
                    <i class='bx bx-chevrons-right'></i>
                </div>
            </div>
            <div class="yard-hot-list swiper">
                <div class="swiper-wrapper">
                    @foreach ($yards as $yard)
                        <div class="swiper-slide">
                            <a href="san/{{ $yard->slug }}">
                                <div class="yard-hot-item">
                                    <div class="yard-hot-image">
                                        <img src="{{ $yard->img }}" alt="{{ $yard->name }}" class="yard-img">
                                    </div>
                                    <div class="yard-hot-text">
                                        <div class="yard-hot-type">
                                            <span>Sân 5 - sân 7</span>
                                        </div>
                                        <div class="yard-hot-price">
                                            <p>{{ $yard->price }}.000 VND/giờ</p>
                                        </div>
                                    </div>
                                    <div class="yard-hot-content">
                                        <h2 class="yard-hot-title">{{ $yard->name }}</h2>
                                        <p class="yard-hot-location">{{ $yard->address }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- yard hot section end-->

        <!-- testimonial section start -->
        <section class="testimonial" id="testimonil">
            <div class="heading" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="heading-title">Đánh giá</h1>
            </div>
            <div class="testimonial-list swiper" data-aos="fade-left" data-aos-duration="1000">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <i class='bx bxs-quote-left'></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                                numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                                nisi delectus ut quis quam veniam praesentium dolorem.</p>
                            <div class="stars">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <img src="{{ asset('frontend/images/ronaldo.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <i class='bx bxs-quote-left'></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                                numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                                nisi delectus ut quis quam veniam praesentium dolorem.</p>
                            <div class="stars">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <img src="{{ asset('frontend/images/neymar.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <i class='bx bxs-quote-left'></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                                numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                                nisi delectus ut quis quam veniam praesentium dolorem.</p>
                            <div class="stars">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <img src="{{ asset('frontend/images/messi.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <i class='bx bxs-quote-left'></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                                numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                                nisi delectus ut quis quam veniam praesentium dolorem.</p>
                            <div class="stars">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <img src="{{ asset('frontend/images/mbappe.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <i class='bx bxs-quote-left'></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                                numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                                nisi delectus ut quis quam veniam praesentium dolorem.</p>
                            <div class="stars">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <img src="{{ asset('frontend/images/halland.jpeg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <i class='bx bxs-quote-left'></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                                numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                                nisi delectus ut quis quam veniam praesentium dolorem.</p>
                            <div class="stars">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <img src="{{ asset('frontend/images/ozil.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <i class='bx bxs-quote-left'></i>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                                numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                                nisi delectus ut quis quam veniam praesentium dolorem.</p>
                            <div class="stars">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star-half'></i>
                            </div>
                            <img src="{{ asset('frontend/images/verrati.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <!-- testimonial section end -->
        <!-- news-single section start -->
        <section class="news-single" id="news-single">
            <div class="heading" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="heading-title">tin tức<span> mới nhất</span></h1>
            </div>
            <div class="news-single-list" data-aos="fade-left" data-aos-duration="1000">
                @foreach ($blogs as $blog)
                    <div class="news-single-item">
                        <a href="news/{{ $blog->slug }}">
                            <div class="news-single-image">
                                @if (Storage::disk('public')->exists($blog->images))
                                    <img src="{{ Storage::url($blog->images) }}" alt="" class="news-single-img">
                                @else
                                    <img src="{{ $blog->images }}" class="news-single-img">
                                @endif

                            </div>
                            <div class="news-single-content">
                                <span>{{ $blog->time }}</span>
                                <h2>{{ $blog->title }}</h2>
                                <p>{{ $blog->description }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('news') }}" class="btn">xem thêm</a>
        </section>
        <!-- news-single section end -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        <script type="text/javascript">
            var path = "{{ route('autocomplete') }}";

            $('#name').typeahead({
                source: function(query, process) {
                    return $.get(path, {
                        query: query
                    }, function(data) {
                        return process(data);
                    });
                }
            });
        </script>
    @endsection
