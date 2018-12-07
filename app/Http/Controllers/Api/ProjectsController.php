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
        $user = auth('api')->user();
        $project = Project::create(array_merge($request->except('img_path'), ['raising_user_id' => $user->id]));

        if ($request->input('img_path')) {
            file_put_contents(storage_path('app/public/project/project' . $project->id . '.jpg'),
                file_get_contents($request->input('img_path')));
        }

        $feedbacks = $request->input('feedbacks');

        foreach ($feedbacks as $feedback) {

            Feedback::create([
                'project_id' => $project->id,
                'price' => $feedback['price'],
                'date' => $feedback['date'],
                'description' => $feedback['description'],
            ]);
        }

        return response()->json([
            'success' => true,
            'user' => $user,
        ]);
    }

    public function show(Project $project)
    {
        foreach ($project->comments as $comment) {
            $t = file_exists(storage_path('app/public/user/user' . $comment->user_id . '.jpg'));

            if ($t) {
                $comment->profile_URL = asset('storage/user/user' . $comment->user_id . '.jpg');
            } else {
                $comment->profile_URL = asset('storage/user/default.jpg');
            }
        }

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
        $project->update($request->except('img_path'));

        if ($request->input('img_path')) {
            file_put_contents(storage_path('app/public/project/project' . $project->id . '.jpg'),
                file_get_contents($request->input('img_path')));
        }
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
            'country' => $request->input('country'),
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'note' => $request->input('note')
        ]);
        $feedback_id = $request->input('feedback_id');
        $data = Feedback::find($feedback_id);
        $data->backer = $data->backer + 1;
        $data->save();
        $project = $data->project;
        $project->backer = $project->backer + 1;
        $project->curr_amount = $project->curr_amount + $data->price;
        $project->save();
        return response()->json([
            'success' => true,
            'user' => auth('api')->user(),
        ]);
    }

    public function recentProjects()
    {
        $projects = Project::orderBy('created_at', 'ASC')->get();

        for ($i = 0; $i < 5; $i++) {
            $projects[$i]->img_path = asset('storage/project/project' . $projects[$i]->id . '.jpg');
        }


        $recentProjects = array($projects[0], $projects[1], $projects[2], $projects[3], $projects[4]);

        return response()->json($recentProjects);

    }
}
