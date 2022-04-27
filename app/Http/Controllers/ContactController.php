<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailContact;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('content.contact.contact');
    }
    public function store(Request $request)
    {

        $messages = [
            'name.required' => 'Vui lòng nhập tên của bạn',
            'email.required' => 'Vui lòng nhập email của bạn',
            'email.email' => 'Email không đúng định dạng',
            // 'phone.required' => 'Vui lòng nhập số điện thoại của bạn',
            // 'phone.digits' => 'Số điện thoại không đúng định dạng',
            // 'phone.numeric' => 'Số điện thoại không đúng định dạng',
            'subject.required' => 'Vui lòng nhập chủ đề',
            'message.required' => 'Vui lòng nhập nội dung',
        ];
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'phone' => 'required|digits:15|numeric',
            'subject' => 'required',
            'message' => 'required',

        ], $messages);

        // lấy tất cả dữ liệu trong form
        $input = $request->all();
        // send mail khi get được request
        $email = 'lamtruongphan8@gmail.com';
        $body = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        Mail::to($email)->send(new MailContact($body));
        // lưu dữ liệu vào database
        Contact::create($input);
        // thông báo khi gửi mail thành công
        alert()->success('Cảm ơn bạn đã gửi liên hệ cho chúng tôi ! Chúng tôi sớm sẽ liên lạc lại với bạn.', 'Thành công');
        // toast('Thành công!','success','top-right');
        return redirect()->back();
    }
}
