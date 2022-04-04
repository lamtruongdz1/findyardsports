@extends('layout.client.master')
@section('content')
    <section class="booking-options">
        <div class="booking-form-options">
            <div class="booking-search-form">
                <div class="input-name form-group">
                    <input type="text" name="name" id="name" placeholder="tên quận hoặc tên sân bóng" class="form-control"
                        autocomplete="off" />
                </div>
                <div class="input-date form-group">
                    <input type="date" name="" id="" placeholder="11/01/2022" class="form-control" />
                </div>
                <div class="input-time form-group">
                    <input type="time" name="" id="" placeholder="10:30" class="form-control" />
                </div>
                <div class="input-btn">
                    <input type="submit" class="btn" value="tìm kiếm" />
                </div>
            </div>
            <div class="booking-filter-form">
                <ul class="filter-list">
                    <li class="filter-item filter-half">
                        <button onclick="showDropdown()" type="button" class="dropdown-filter">
                            <h2>Quận / Huyện</h2>
                            <span>Tp. Hồ Chí Minh</span>
                            <i class='bx bxs-down-arrow'></i>
                        </button>
                        <div class="dropdown-content" id="dropMenu">
                            <div class="dropdown-content-left">
                                @foreach ($districts as $district)
                                    <div class="location-content">
                                        <input type="checkbox" id="{{ $district->name }}">
                                        <label for="{{ $district->name }}">{{ $district->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                    <li class="filter-item">
                        <button onclick="showDropDownType()" type="button" class="dropdown-filter">
                            <h2>Loại sân</h2>
                            <span>sân 5</span>
                            <i class='bx bxs-down-arrow'></i>
                        </button>
                        <div class="dropdown-type">
                            <ul class="dropdown-type-list" id="dropDownType">
                                @foreach ($category as $item)
                                    <li class="dropdown-type-item">{{ $item->name }}</li>
                                @endforeach

                            </ul>
                        </div>
                    </li>
                    <li class="filter-item">
                        <button onclick="showDropDownTime()" type="button" class="dropdown-filter">
                            <h2>Thời gian</h2>
                            <span>1 tiếng</span>
                            <i class='bx bxs-down-arrow'></i>
                        </button>
                        <div class="dropdown-time">
                            <ul class="dropdown-time-list" id="dropDownTime">
                                <li class="dropdown-time-item">1 tiếng</li>
                                <li class="dropdown-time-item">1.5 tiếng</li>
                                <li class="dropdown-time-item">2 tiếng</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- yard section start -->
    <section class="yard" id="yard">
        <div class="heading">
            <h1 class="heading-title">có 200 sân tại <span>Tp.Hồ chí minh</span></h1>
        </div>
        </div>
        <div class="yard-list">
            @foreach ($yards as $yard)
                <div class="yard-item">
                    <a href="{{ $yard->slug }}">
                    <div class="yard-image">
                        <img src="{{ $yard->img }}" alt="" class="yard-img">
                    </div>
                    </a>
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
    <div class="container">
        @if ($yards->links()->paginator->hasPages())

                {{ $yards->links() }}

        @endif
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
