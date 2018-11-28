<?php

namespace App\Http\Controllers\Api;

use App\Subscriber;
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

    public function sendSubscriptionMail(Request $request)
    {


        $data = [
            'title' => '訂閱者專屬電子報',
            'content'=>$request->get('content'),
            'email',
        ];


        foreach (Subscriber::all() as $subscriber)
        {
            $data['email']=$subscriber['email'];
            Mail::send('emails.subscriberMail', $data, function ($message)use ($subscriber) {
                $message->to($subscriber['email']);
                $message->subject('訂閱者專屬電子報');
            });
        }


        return  view('emails.writeNewMail');
    }

    //  show a new subscription mail view
    public function index()
    {
        return view('emails.writeNewMail');
    }
}
