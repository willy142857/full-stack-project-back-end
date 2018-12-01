<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'email' => $this->email,
            'name' => $this->name,
            'phone' => $this->phone,
            'description' => $this->description,
            'sex' => $this->sex,
            'address' => $this->address,
            'birth' => $this->birth,
            'followingFeedbacks' => FeedbackResource::collection($this->followingFeedbacks),
            'followingProjects' => ProjectResource::collection($this->followingProjects),
            'raisingProjects' => ProjectResource::collection($this->raisingProjects),
            'profile_URL' => $this->profile_URL,
        ];
    }
}
