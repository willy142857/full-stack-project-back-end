<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $imgUrl = 'app/public/project/project' . $this->id . '.jpg';
        return [
            'id' => $this->id,
            'raising_user_id' => $this->raising_user_id,
            'fundraiser' => $this->fundraiser,
            'email' => $this->email,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'category_name' => $this->category->name,
            'brief' => $this->brief,
            'started_at' => date('Y-m-d', strtotime($this->started_at)),
            'ended_at' => date('Y-m-d', strtotime($this->ended_at)),
            'curr_amount' => $this->curr_amount,
            'goal_amount' => $this->goal_amount,
            'backer' => $this->backer,
            'description' => $this->description,
            'feedbacks' => FeedbackResource::collection($this->feedbacks),
            'comments' => CommentResource::collection($this->comments),
            'img_path' => file_exists(storage_path($imgUrl)) ?
                asset('storage/project/project' . $this->id . '.jpg') : null,
            'relative_web' => $this->relative_web,
        ];
    }
}
