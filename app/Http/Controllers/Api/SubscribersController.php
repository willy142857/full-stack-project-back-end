<?php

namespace App\Http\Controllers\Api;

use App\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribersController extends Controller
{
    public function add(Request $request)
    {
        $data = $request->all();
        Subscriber::create($data);
        return response()->json($request);
    }


}
