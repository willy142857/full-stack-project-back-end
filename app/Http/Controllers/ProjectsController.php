<?php

namespace App\Http\Controllers;

use App\Category;
use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    // Display a l  isting of the resource.
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();
        //for debug, stop and print data
        //dd($products);

        $data = ['projects' => $projects];
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
            'name' => 'required',
            'description' => 'required',
        ]);
        $data['started_at']= date('Y-m-d', strtotime($data['started_at']));
        $data['ended_at']= date('Y-m-d', strtotime($data['ended_at']));
        $data['feedback']=json_encode('123');
        $data['comment']=json_encode('123');;
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
        $project->delete();
        return redirect(route('projects.index'));
    }
}
