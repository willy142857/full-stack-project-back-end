<?php

namespace App\Http\Controllers\Api;

use App\Feedback;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\FeedbackResource;
use App\Project;
use App\Following;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();
        ProjectResource::withoutWrapping();

        return ProjectResource::collection($projects);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
        ]);
        Project::create($request->all());
    }

    public function show(Project $project)
    {
        ProjectResource::withoutWrapping();
        return new ProjectResource($project);
//        $project->feedbacks = $project->feedbacks()->get();
//        $project->comments = $project->comments()->get();
//        return response()->json($project);
    }

    public function edit(Project $project)
    {
        ProjectResource::withoutWrapping();
        return response()->json($project);
    }

    public function update(Request $request, Project $project)
    {
        $project->update($request->all());
    }

    public function destroy(Project $project)
    {
        //
    }




    public function comment(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'comment' => 'required|string',
            'project_id' => 'required',
            'rating' => 'required',
        ]);
        Comment::create([
            'user_id' => auth('api')->user()->id,
            'project_id' => $request->input('project_id'),
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment'),
        ]);
        return response()->json([
            'success' => true,
            'user' => auth('api')->user(),
        ]);
    }

    public function orderfeedback(Request $request)
    {
        Following::create([
            // 'user_id' => 1,
            'user_id' => auth('api')->user()->id,
            'project_id' => $request->input('project_id'),
            'feedback_id' => $request->input('feedback_id'),
        ]);
        return response()->json([
            'success' => true,
            'user' => auth('api')->user(),
        ]);
    }
}
