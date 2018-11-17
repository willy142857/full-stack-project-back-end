<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMail(Request $request)
    {
        $this->validate(
            $request,
            [
                'email'=> 'required|string|email',
            ]
        );

        $data = [
            'title' => '重設密碼驗證信',
            'content' => '請點擊以下網址重設密碼',
            'url' => 'http://localhost:4200/resetPassword',
        ];

        Mail::send('emails.welcome', $data, function ($message)use ($request) {
            $message->to($request->get('email'));
            $message->subject('重設密碼');
        });

        return response()->json(['message' => 'Email successfully send']);
    }
}
