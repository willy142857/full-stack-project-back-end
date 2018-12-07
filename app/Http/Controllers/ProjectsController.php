<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Feedback;
use App\Following;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    // Display a listing of the resource.
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();
        //for debug, stop and print data
        //dd($projects);

        $data = [
            'projects' => $projects,
        ];

        return view('projects.index', $data);
    }

    //  Show the form for creating a new resource.
    public function create()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories,
        ];
        return view('projects.create', $data);
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {

        $data = $request->all();
        $this->validate($request, [
            'fundraiser' => 'required',
            'email' => 'required',
            'name' => 'required',
            'category_id' => 'required',
            'brief' => 'required',
            'started_at' => 'required',
            'ended_at' =>'required',
            'goal_amount' => 'required',
            'description' => 'required',
            'img_path' => 'required',
            'relative_web' => 'required',
        ]);
        $data['started_at'] = date('Y-m-d', strtotime($data['started_at']));
        $data['ended_at'] = date('Y-m-d', strtotime($data['ended_at']));
        Project::create($data);
        return redirect(route('projects.index'));
    }


    // Display the specified resource.
    public function show(Project $project)
    {
        //
    }

    // Show the form for editing the specified resource.
    public function edit(Project $project)
    {
        $categories = Category::all();
        $data = [
            'project' => $project,
            'categories' => $categories,
        ];
        return view('projects.edit', $data);
    }

    // Update the specified resource in storage.
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
        return redirect(route('projects.index'));
    }

    // Remove the specified resource from storage.
    public function destroy(Project $project)
    {
//        Feedback::where('project_id', $project->id)->delete();
//        Comment::where('project_id', $project->id)->delete();
//        Following::where('project_id', $project->id)->delete();
        $project->delete();
        $project->comments()->delete();
        $project->feedbacks()->delete();
        $project->followings()->delete();
        return redirect(route('projects.index'));
    }



}
