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
        return [
            'id' => $this->id,
            'fundraiser' => $this->fundraiser,
            'email' => $this->email,
            'name' => $this->name,
            'category_id' => $this->category_id,
            'category_name' => $this->category->name,
            'brief' => $this->brief,
            'started_at' => $this->started_at,
            'ended_at' => $this->ended_at,
            'curr_amount' => $this->curr_amount,
            'goal_amount' => $this->goal_amount,
            'backer' => $this->backer,
            'description' => $this->description,
            'feedbacks' => FeedbackResource::collection($this->feedbacks),
            'comments' => CommentResource::collection($this->comments),
            'img_path' => $this->img_path,
            'relative_web' => $this->relative_web,
        ];
    }
}
