@extends('layout.client.master')
@section('content')
    <section class="manage-yard" id="manage-yard">
        <h1>Đăng ký quản lý sân bóng</h1>
        <div class="manage-list">
            <div class="manage-item manage-item-left">
                <h2>Đăng ký quản lý sân bóng chỉ với 3 bước</h2>
                <div class="manage-content">
                    <p>Điền thông tin đầy đủ và chính xác</p>
                    <p>Xác nhận thông tin.</p>
                    <p>Vào cổng quản lý và bắt đầu quản lý sân bóng với Find Yard Sport</p>
                    <button class="btn js-register-modal" onclick="showModal()">Đăng ký ngay</button>
                </div>
            </div>
            <div class="manage-item manage-item-right">
                <img src="{{ asset('frontend/images/mn.jpg') }}" alt="">
            </div>
        </div>
        <div class="manage-list">
            <div class="manage-item manage-item-left">
                <h2>Câu hỏi thường gặp</h2>
                <div class="manage-content">
                    <h2>Phầm mềm quản lý FYS hỗ trợ gì cho chủ sân?</h2>
                    <p>Phần mềm quản lý sân bóng của FYS hỗ trợ chủ sân quản lý lịch đặt sân hiệu quả và chuyên nghiệp hơn.
                        Ở đó chủ sân có thể biết được một ngày sân có bao nhiêu lịch, lịch đặt ở sân nào, giờ nào? Giờ nào
                        còn sân trống một cách nhanh chóng, dễ dàng.

                        Dù chủ sân ở đâu và làm gì cũng có thể xem tình trạng hoạt động của sân bóng ngay lập tức. Từ đây
                        chủ sân không còn phải lo lắng về việc quên lịch, nhầm đội hay sai giờ nữa. Ngoài ra, bạn chỉ cần
                        xác nhận lịch đặt, không còn phải bận bịu trả lời điện thoại giờ này có sân trống không nữa hay đau
                        đầu với hàng tá giấy tờ rắc rối..</p>
                    <img src="{{ asset('frontend/images/sta.jpg') }}" alt="">
                    <h2>FYS sẽ giúp tôi tăng doanh thu thế nào?</h2>
                    <p>FYS hỗ trợ sân bóng của bạn quảng bá tới người chơi, giúp người chơi có thể xem được giờ nào có sân
                        trống của sân của bạn nên đặt sân online dễ hơn và nhanh hơn.
                        Mặt khác chúng tôi còn phí bạn giảm chi phí và thời gian quản lý sân bóng một cách thủ công, giấy
                        bút như trước giờ.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">
                <a class='bx bx-x' onclick="hideModal()"></a>
            </div>
            <header class="modal-header">
                <h2>Đăng ký dành cho chủ sân</h2>
            </header>
            <form action="" class="manage-form">
                <div class="modal-list">
                    <div class="modal-body">
                        <div class="manage-form-group">
                            <label for="">Họ và tên</label>
                            <input type="text" name='name' required="required" class="manage-form-control">
                        </div>
                        <div class="manage-form-group">
                            <label for="">Địa chỉ Email</label>
                            <input type="email" name='email' required="required" class="manage-form-control">
                        </div>
                        <div class="manage-form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" name='password' required="required" class="manage-form-control">
                        </div>
                        <div class="manage-form-group">
                            <label for="">Nhập lại mật khẩu</label>
                            <input type="password" name='re_password' required="required" class="manage-form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="manage-form-group">
                            <label for="">Tên sân</label>
                            <input type="text" name="yard_name" required="required" class="manage-form-control">
                        </div>
                        <div class="manage-form-group">
                            <label for="">Số điện thoại</label>
                            <input type="text" name="phone" required="required" class="manage-form-control">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="manage-form-group">
                            <label for="">Giờ mở cửa</label>
                            <input type="time" required="required" class="manage-form-control">
                        </div>
                        <div class="manage-form-group">
                            <label for="">Giờ đóng cửa</label>
                            <input type="time" required="required" class="manage-form-control">
                        </div>
                        <div class="modal-body">
                            <div class="manage-form-group">
                                <label for="">Thành phố/ Tỉnh</label>
                                <select name="city" id="city">
                                    <option value="50" selected="selected">Hồ Chí Minh</option>
                                </select>
                            </div>
                            <div class="manage-form-group">
                                <label for="">Quận / Huyện</label>
                                <select name="district" id="district">
                                    <option value="50" selected="selected">Quận 1</option>
                                    <option>Huyện Bình Chánh</option>
                                    <option>Huyện Cần Giờ</option>
                                    <option>Huyện Củ Chi</option>
                                    <option>Huyện Hóc Môn</option>
                                    <option>Huyện Nhà Bè</option>
                                    <option>Quận 1</option>
                                    <option>Quận 2</option>
                                    <option>Quận 3</option>
                                    <option>Quận 4</option>
                                    <option>Quận 5</option>
                                    <option>Quận 6</option>
                                    <option>Quận 7</option>
                                    <option>Quận 8</option>
                                    <option>Quận 9</option>
                                    <option>Quận 10</option>
                                    <option>Quận 11</option>
                                    <option>Quận 12</option>
                                    <option>Quận Bình Tân</option>
                                    <option>Quận Bình Thạnh</option>
                                    <option>Quận Gò Vấp</option>
                                    <option>Quận Phú Nhuận</option>
                                    <option>Quận Tân Bình</option>
                                    <option>Quận Tân Phú</option>
                                    <option>Quận Thủ Đức</option>
                                </select>

                            </div>
                            <div class="manage-form-group">
                                <label for="">Địa chỉ</label>
                                <input type="text" required="required" class="manage-form-control">
                            </div>
                        </div>
                    </div>
            </form>
        </div>
        <footer class="modal-footer">
            <a href="" class="btn">Đăng ký</a>
        </footer>
    </div>
    </div>
@endsection