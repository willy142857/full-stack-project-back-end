<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Following;
use App\Project;
use App\User;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $following_projects = Following::orderBy('created_at', 'DESC')->get();
//        $project = Project::where('id', '=', $following_projects->get('project'))->get();
        $data = [
            'following_projects' => $following_projects,
        ];
        return view('orders.index',$data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Following $following_projects)
    {
        $categories = Category::all();
        $feedbacks = Feedback::where('id', '=', $following_projects->get('feedback'))->get();
        $project = Project::where('id', '=', $following_projects->get('project'))->get();

        $data = [
            'project' => $project,
            'categories' => $categories,
            'feedbacks' => $feedbacks,
        ];

        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Following $order)
    {
        $order->delete();

        return redirect()->route('orders.index');
    }
}
