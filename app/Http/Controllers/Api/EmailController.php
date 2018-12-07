<?php

namespace App\Http\Controllers\Api;

use App\Following;
use App\Project;
use App\Subscriber;
use Carbon\Carbon;
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

        return redirect(route('emails.index'));
        //return  view('emails.writeNewMail');
    }

    public function sendEndProjectMail()
    {
        $data = [
            'title' => '募資結案通知信',
            'name',
            'projectName',
            'ended_at',
        ];

        //找到所有到期的募資
        $today=new Carbon();
        $projects = Project::orderBy('ended_at', 'ASC')->get();
        $endList = array();

        foreach ($projects as $project)
        {
            if($today >= $project->ended_at->addDay())
            {
                array_push($endList,$project);
            }
            else {
                break;
            }
        }

        foreach ($endList as $endProject)
        {
            $endProjectFollowers = $endProject->followingUsers;
            foreach($endProjectFollowers as $endProjectFollower)
            {
                $data['name'] = $endProjectFollower->name;
                $data['projectName'] = $endProject->name;
                $data['ended_at'] = $endProject->ended_at->toDateString();


                Mail::send('emails.projectEndNotification', $data, function ($message) use($endProjectFollower){
                    $message->to($endProjectFollower->email);
                    $message->subject('募資結案通知信');
                });
            }
        }

        return redirect(route('dashboard.index'));
    }


    //  show a new subscription mail view
    public function index()
    {
        $subscribers = Subscriber::all();
        $data = [
            'subscribers' => $subscribers,
        ];

        return view('emails.writeNewMail', $data);
    }

    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect(route('emails.index'));
    }


}
