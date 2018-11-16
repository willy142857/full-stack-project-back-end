<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMail(Request $request)
    {
//        $this->validate(
//            $request,
//            [
//                'email'=> 'required|string|email',
//            ]
//        );

        $data = [
            'title' => '測試使用 Laravel 5 的 Gmail 寄信服務',
        ];



        Mail::send('emails.welcome', $data, function ($message)use ($request) {
            $message->to('jj8611192@gmail.com');
            $message->subject('重設密碼');
        });

        return response()->json(['message' => 'Email successfully send']);
    }
}
