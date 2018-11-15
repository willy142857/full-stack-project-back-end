<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendMail(string $email)
    {
        $data = [
            'title' => '測試使用 Laravel 5 的 Gmail 寄信服務',
        ];



        Mail::send('emails.welcome', $data, function ($message)use ($email) {
            $message->to($email);
            $message->subject('重設密碼');
        });
    }
}
