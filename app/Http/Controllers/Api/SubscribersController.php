<?php

namespace App\Http\Controllers\Api;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribersController extends Controller
{
    public function add(Request $request)
    {
        $this->validate($request, [
            'email'=>'email|required|unique:subscribers'
        ]);

        $data = $request->all();
        Subscriber::create($data);
        return response()->json($request);
    }

    public function destroy(Request $request)
    {
        $this->validate($request, [
            'email'=>'email|required'
        ]);
        $email = $request->email;
        $data = Subscriber::where('email', $email)->get();
        Subscriber::where('email', $email)
            ->delete();
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

}
