@extends('layout.client.master')
@section('title','Quản lý lịch đặt')

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@section('content')
    <!-- pay -->
    <section class="history-yard" id="history-yard">
        <h1 class="text-center mb-4">Lịch sử đặt sân</h1>
        <div class="history-container">
            <div class="row">
                <div class="col-md-4">
                    <div class="shadow p-3 mb-5 rounded-3 d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark"
                        style="width: 400px">
                        <a href="/"
                            class="title-col d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <img src="{{ asset('frontend/images/logo.png') }}" alt="" />
                            <span class="title-h">Find Yard Sport</span>
                        </a>
                        <hr />
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item mb-3">
                                <a href="#" class="nav-link text-white">
                                    <i class="hs-icon bx bxs-user-circle"></i>
                                    <span class="content-h ms-2">Thông tin tài khoản</span>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="nav-link active" aria-current="page">
                                    <i class="hs-icon bx bx-football"></i>
                                    <span class="content-h ms-2">Lịch đặt của tôi</span>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="nav-link text-white">
                                    <i class="hs-icon bx bxs-bell"></i>
                                    <span class="content-h ms-2">Thông báo</span>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{ route('logout') }}" class="nav-link text-white" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="hs-icon bx bx-log-out-circle"></i><span class="content-h ms-2">Đăng
                                        xuất</span>

                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                        <hr />
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="history-yard-content">
                        <div class="border-light">
                            <form action="" class="form-history">
                                <div class="row pl-md-2">
                                    <div class="col-xl-3 col-md-3 mb-4">
                                        <label for="" class="form-label">Trạng thái</label>
                                        <select name="status" id="form_guests" data-style="btn-selectpicker" title=" "
                                            class="form-control">
                                            <option value="all" selected="">Tất cả</option>
                                            <option value="new">Mới/Đã xác nhận</option>
                                            <option value="pending">Chờ xác nhận</option>
                                            <option value="done">Đã qua/Hoàn thành</option>
                                            <option value="cancelled">Đã hủy</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-md-3 mb-4">
                                        <label for="" class="form-label">Từ ngày</label>
                                        <input type="text" id="begin_date" name="begin_date"
                                            class="datepicker datepicker-begin form-control" data-provide="datepicker"
                                            value="25/03/2022" />
                                    </div>
                                    <div class="col-xl-3 col-md-3 mb-4">
                                        <label for="" class="form-label">Đến ngày</label>
                                        <input type="text" id="" name="" class="datepicker datepicker-end form-control"
                                            data-provide="datepicker" value="25/04/2022" />
                                    </div>
                                    <div class="col-sm-3 mb-4 order-2 order-sm-1">
                                        <button type="submit" class="btn-history btn-primary search-btn">
                                            <i class="fas fa-search mr-1"></i>Tìm kiếm
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <table class="table table-bordered yajra-datatable" id="datatable">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã Hóa Đơn</th>
                                        <th>Sân </th>
                                        <th>Giá</th>
                                        <th>Ngày đặt</th>
                                        <th>Thời gian đặt chỗ</th>
                                        <th>Trạng thái</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- JavaScript Bundle with Popper -->
@endsection
