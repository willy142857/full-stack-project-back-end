<?php

namespace App\Http\Controllers\Api;

use App\Feedback;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Http\Resources\FeedbackResource;
use App\Project;
use App\Following;
use App\Comment;
use App\Raising;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('created_at', 'DESC')->get();

        return ProjectResource::collection($projects);
    }

    public function create()
    {
        //
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create($request->all());

        $feedbacks = $request->input('feedbacks');

        foreach ($feedbacks as $feedback) {

            Feedback::create([
                'project_id' => $project->id,
                'price' => $feedback['price'] ,
                'date' => $feedback['date'],
                'description' => $feedback['description'],
            ]);
        }

        Raising::create([
           'user_id' => auth('api')->user()->id,
            'project_id' => $project->id,
        ]);

        return response()->json([
            'success' => true,
            'user' => auth('api')->user(),
        ]);
    }

    public function show(Project $project)
    {
        return new ProjectResource($project);
//        $project->feedbacks = $project->feedbacks()->get();
//        $project->comments = $project->comments()->get();
//        return response()->json($project);
    }

    public function edit(Project $project)
    {
        return new ProjectResource($project);
    }

    public function update(ProjectRequest $request, Project $project)
    {
        $project->update($request->all());
        $feedbacks = $request->input('feedbacks');

        foreach ($feedbacks as $feedback) {
            if ($feedback['id'] == null) {
                Feedback::create([
                    'project_id' => $project->id,
                    'price' => $feedback['price'],
                    'date' => $feedback['date'],
                    'description' => $feedback['description'],
                ]);
            } else {
                $data = Feedback::find($feedback['id']);
                $data->price = $feedback['price'];
                $data->date = $feedback['date'];
                $data->description = $feedback['description'];
                $data->save();
            }
        }
        return response()->json([
            'success' => true,
            'user' => auth('api')->user(),
        ]);
    }

    public function destroy(Project $project)
    {
        //
    }




    public function comment(Request $request)
    {
        $this->validate($request, [
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
