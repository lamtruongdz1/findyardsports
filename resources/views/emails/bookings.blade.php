@component('mail::message')

    # Cảm ơn!
    Cảm ơn bạn đã đặt sân tại Find Yard Sport !
    @component('mail::table')
        |Mã hóa đơn |Sân | Ngày |
        |------------|-----|--------|
        |{{ $thembookings['bill_code'] }} |{{ $thembookings['yard_id'] }} | {{ $thembookings['date'] }} |
        |&nbsp; |Tổng tiền : |{{ $thembookings['total_price'] }}|
    @endcomponent

    @component('mail::button', ['url' => 'http://127.0.0.1:8000/quan-ly-san-bong', 'color' => 'blue'])
        Xem hóa đơn chi tiết trên website tại đây
    @endcomponent


    Find Yard Sports !

@endcomponent
