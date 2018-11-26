<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeedbackResource extends JsonResource
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
            'id' => $this->id,
            'date' => $this->date,
            'price' => $this->price,
            'description' => $this->description,
            'backer' => $this->backer,
            'img_path' => $this->img_path,
            'updated_at' => $this->updated_at,
        ];
    }
}
