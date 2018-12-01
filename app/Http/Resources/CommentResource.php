<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->user->id,
            'username' => $this->user->name,
            'rating' =>$this->rating,
            'comment' => $this->comment,
            'date' => $this->updated_at,
            'profile_URL' => $this->profile_URL,
        ];
    }
}
