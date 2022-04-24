@extends('layout.client.master')
@section('content')
    <section class="booking-options">
        <div class="booking-form-options">
            <div class="booking-search-form">

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

                <form action="/search" method="GET" class="booking-bar-form">
                    <div class="input-btn">
                        <input type="submit" class="btn" value="tìm kiếm" />
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- yard section start -->
    <section class="yard" id="yard">
        <div class="heading">
            <h1 class="heading-title">có  {{$total_yard}} sân được tìm thấy tại <span>Tp.Hồ chí minh</span></h1>
        </div>
        </div>
        <div class="yard-list">
            @foreach ($yards as $yard)
                <div class="yard-item">
                    <a href="san/{{ $yard->slug }}">
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
        @if ($yards->links()->paginator->hasPages())
                {{ $yards->links() }}
        @endif

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
