<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = \auth('api')->user();

        $t = file_exists(storage_path('app/public/user/user' . \auth('api')->id() . '.jpg'));

        if ($t) {
            $user->profile_URL = asset('storage/user/user' . \auth('api')->id() . '.jpg');
        } else {
            $user->profile_URL = asset('storage/user/default.jpg');
        }

        return new UserResource($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $t = file_exists(storage_path('app/public/user/user' .$user->id . '.jpg'));

        if ($t) {
            $user->profile_URL = asset('storage/user/user' . $user->id . '.jpg');
        } else {
            $user->profile_URL = asset('storage/user/default.jpg');
        }

        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = \auth('api')->user();
        $user->update($request->all());
        $user->save();
        if($request->input('photo'))
        {
            file_put_contents(storage_path('app/public/user/user' . \auth('api')->id() . '.jpg'),
                file_get_contents($request->input('photo')));
        }

        return response()->json($user);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function resetPassword(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|string',
            'password' => 'required|string|min:6'
        ]);


        $user = User::where('email', '=', $request->get('email'))->get();

        $user->password = $request->password;

        $newData = [
            'password' => Hash::make($request->input('password')),
        ];

        $user['0']->update($newData);

        //$user->update($request->all());
    }

    public function showFollowing()
    {
        return response()->json(\auth()->user()->followingProjects);
    }

    public function showFollowingFeedback()
    {
        return response()->json(\auth()->user()->followingFeedbacks);
    }

    public function showRaising()
    {
        return response()->json(\auth()->user()->raisingProjects);
    }
}
