<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;

use function Symfony\Component\String\b;

class UserController extends Controller
{
    public function manage()
    {
        $user = auth()->user();

        return view('content.payment.manage', compact('user'));
    }
    public function getBill(Request $request)
    {
        if ($request->ajax()) {
            $user = auth()->user();
            $data = Booking::where('user_id',$user->id)->latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->editColumn('status', function ($row) {
                    if ($row->status == 0) {
                        return 'Chưa thanh toán';
                    } elseif ($row->status == 1) {
                        return '<span>đã thanh toán</span>';
                    } else {
                        return 'Hủy';
                    }
                })
                ->escapeColumns([])
                ->rawColumns(['status'])
                ->editColumn('date', function ($row) {
                    return $row->created_at->format('d/m/Y');
                })
                ->editColumn('total_price', function ($row) {
                     $toVNĐ = $row->total_price . ' VNĐ';
                    return $toVNĐ;
                })
                ->editColumn('time', function ($row) {
                    $time_booking = $row->time.'-'.$row->end_time;
                    return $time_booking;
                })
                ->addColumn('action', function($row){
                    $actionBtn = '<p><a href="javascript:void(0)"> Đánh giá</a></p> <a href="javascript:void(0)" >Xem hóa đơn</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }
    }
}
