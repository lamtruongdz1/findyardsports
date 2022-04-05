@extends('layout.client.master')
@section('content')
    <section class="news-detail" id="news">
        <h1>Tin tức</h1>
        <div class="news-title">
            <h2>
                {{ $news->title }}
            </h2>
            <span>{{ $news->time }}</span>
        </div>
        <div class="news-detail-img">
            <img src="{{ $news->images }}" alt="" />
        </div>
        <div class="news-detail-content">
            <p>
                Nhưng khi đến gần khung thành đối phương, thay vì tung một cú sút xa,
                cầu thủ người Serbia chọn cách mở biên cho Marcus Rashford. Một phương
                án dễ làm và an toàn, nhưng tỏ ra không “đồng điệu” với những gì Man
                United đã làm trong cả trận đấu: Họ có 11 pha dứt điểm, nhưng 6 pha
                dứt điểm thuộc về Diogo Dalot (4) và Raphael Varane (2). Trong khi đó,
                tiền đạo được kì vọng nhất, Cristiano Ronaldo cả trận không biết khung
                thành Atletico Madrid tròn méo ra sao. Chỉ một thông số thôi, nhưng ai
                cũng hiểu United bế tắc thế nào trước đại diện đến từ Tây Ban Nha.
                Phút thứ 94 trên sân Old Trafford, Manchester United tràn lên trong
                đợt tấn công cuối cùng, với người châm ngòi là Nemanja Matic. Man Utd
                bị loại khỏi Champions league Fan Quỷ Đỏ đừng buồn, vì hình ảnh Nhưng
                khi đến gần khung thành đối phương, thay vì tung một cú sút xa, cầu
                thủ người Serbia chọn cách mở biên cho Marcus Rashford. Một phương án
                dễ làm và an toàn, nhưng tỏ ra không “đồng điệu” với những gì Man
                United đã làm trong cả trận đấu: Họ có 11 pha dứt điểm, nhưng 6 pha
                dứt điểm thuộc về Diogo Dalot (4) và Raphael Varane (2). Trong khi đó,
                tiền đạo được kì vọng nhất, Cristiano Ronaldo cả trận không biết khung
                thành Atletico Madrid tròn méo ra sao. Chỉ một thông số thôi, nhưng ai
                cũng hiểu United bế tắc thế nào trước đại diện đến từ Tây Ban Nha.
                ADVERTISING X Tất nhiên, không nên vì thế mà đổ hết trách nhiệm lên
                đầu HLV Ralf Rangnick. Đây chỉ đơn giản là đẳng cấp của United thời
                điểm hiện tại. Họ chơi bóng đúng như những gì khán giả chứng kiến hàng
                tuần: Một tập thể đồng đều với chất lượng cá nhân tuyệt vời, nhưng lại
                không đủ sự điềm tĩnh để kiểm soát trận đấu, cũng như không có một
                hàng thủ vững chãi và những phương án chiến thuật hợp lí để khép lại
                trận đấu. Mặc dù vậy, đã có những sự hỗn loạn nhất định trong khoảng
                nửa giờ cuối cùng. Tung Juan Mata vào sân để tạo đột biến trước hàng
                thủ lùi sâu của Atletico không hẳn là động thái hoang đường của
                Rangnick. Vấn đề chỉ nảy sinh từ việc Mata đột nhiên được đưa ra ánh
                đèn sân khấu, sau cả mùa giải chìm trong bóng tối. Cựu cầu thủ Chelsea
                mới chỉ đá… 172 phút mùa này, và lẽ ra nên nghỉ hưu từ năm 2018.
            </p>
        </div>
        {{-- <div class="news-detail-img">
      <img src="images/nd2.webp" alt="" />
    </div>
    <div class="news-detail-content">
      <p>
        Trước đó, Rangnick đã giúp đối thủ bớt lo lắng bằng sự thay đổi người.
        Marcus Rashford thi đấu cứ như thể cầu thủ đã ghi hat-trick nhanh nhất
        Champions League, sau khi vào sân thay người mùa trước là người khác.
        Tình huống đầu tiên cho thấy sự hiện diện của anh trên sân là một pha
        phạm lỗi, sau đó là một pha mất bóng nguy hiểm. Cuối cùng là David De
        Gea, người quyết định dâng cao khi United được hưởng một quả phạt góc
        ở phút bù giờ, một điều trớ trêu bởi anh rất ngại dâng lên cắt bóng
        giúp hàng thủ trong cả trận. Một quả phạt góc vô vọng, khi bóng nằm
        gọn trong tay Jan Oblak, nhưng khuôn mặt của De Gea ở buổi phỏng vấn
        sau trận đấu trông còn mông lung hơn: “Chúng tôi còn lâu mới có thể
        cạnh tranh chức vô địch Premier League và Champions League,” anh thừa
        nhận. “Tôi không biết khi nào CLB này sẽ trở lại đỉnh cao.” Sẽ lâu
        đấy, David, với một đội chỉ thắng vỏn vẹn hai trận ở vòng knock-out
        Champions League - trên sân khách trước Paris Saint-Germain và sân nhà
        trước Olympiakos - kể từ năm 2011. Không phải United không có những
        điểm sáng. Fred đã có mặt ở khắp mọi nơi và làm đủ thứ, từ xoạc bóng
        cho đến thực hiện những cú lừa bóng điên rồ. Là Anthony Elanga, với
        một pha dứt điểm mà nếu trúng ở bất cứ chỗ nào ngoài khuôn mặt của
        Oblak, có lẽ mọi chuyện đã khác. Đó là những thời điểm Man United vẫn
        còn ý thức về khả năng chơi bóng. Vấn đề là họ hiếm khi duy trì được
        điều đó trong một trận đấu, chứ chưa nói đến cả mùa giải. Sau gần một
        hiệp đấu chịu trận, Atletico bất ngờ vươn lên dẫn trước ở cuối hiệp 1
        (xuất phát từ việc Elanga không lùi về). Kể từ đó, United sụp đổ hoàn
        toàn. Sẽ cần phải có lời khen cho Atletico Madrid, những người tỏ ra
        lộng lẫy theo cách xấu xí nhất. Sau những cách tân không mấy thành
        công, họ quyết định trở lại bản ngã, trở lại chính họ trước kia, thay
        vì hàng thủ tốt thứ 12 ở La Liga và giành được thành quả. Thương hiệu
        bóng đá của Diego Simeone có thể trông không được trôi chảy ở Old
        Trafford (có lẽ vì thế mà sau trận đấu, ông nhận cả một đống đồ uống
        từ trên cao ném xuống khi chạy vào đường hầm), nhưng với hai chức vô
        địch La Liga và hai trận chung kết Champions League, ông đã có một kỷ
        lục mà United hiện tại chỉ có thể nhìn vào và mơ ước. Nếu có điều gì
        United có thể phàn nàn về trận đấu này, ngoài lối chơi xù xì của đội
        khách, thì đó sẽ là trọng tài người Slovenia Slavko Vincic, người đã
        có những pha cắt còi khó hiểu ở trận đấu này. Nhưng phải thừa nhận
        rằng United đã may mắn khi có mặt ở vòng 16 đội Champions League.
        Trong 8 trận đấu ở châu Âu, họ phải cần đến những bàn thắng muộn trong
        5 trận. Ban đầu, họ bốc trúng phải PSG, trước khi lễ bốc thăm được
        thực hiện lại. Nhưng giờ đây, vận may của họ cuối cùng đã cạn kiệt.
      </p>
      <div class="news-detail-img">
        <img src="images/nd3.webp" alt="" />
      </div>
      <div class="news-detail-content">
        <p>
          Vậy nếu bỏ qua yếu tố may mắn, cũng như yếu tố lịch sử và những
          khoản chi đắt đỏ, liệu Man United hiện tại có thực sự mạnh hơn những
          đội bóng như Ajax Amsterdam hay Napoli không? Có lẽ, chúng ta nên
          ngừng nghĩ về United như những kẻ kém cỏi. Cũng đừng buồn vì kết quả
          này, bởi đây là đẳng cấp Man United đang thuộc về. Đã có những tin
          tức cho thấy kế hoạch tháo dỡ sân Old Trafford để xây dựng một sân
          bóng mới, nhưng thực tế cho thấy việc dựng xây phải bắt đầu từ đội
          hình Man United trước. Họ đã cố gắng, nhưng cũng chỉ đến vậy. Dành
          cho Manchester United, có lẽ không gì phù hợp hơn thông điệp thường
          được ghi trên thẻ cào trúng thưởng trong các gói mỳ: Chúc bạn may
          mắn lần sau!
        </p>
      </div>
    </div> --}}
        <div class="news-detail swiper">
            <h1>Tin tức liên quan</h1>
            <div class="swiper-wrapper">
                @foreach ($newsLike as $item)
                    <div class="swiper-slide">
                        <a href="/news/{{ $item->slug }}">
                            <div class="news-detail-item">
                                <div class="news-detail-image">
                                    <img src="{{ $item->images }}" alt="">
                                </div>
                                <div class="news-detail-maincontent">
                                    <h2 class="news-detail-title">{{ $item->title }}</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <br> <br>
            <div class="swiper-pagination"></div>
    </section>
@endsection
