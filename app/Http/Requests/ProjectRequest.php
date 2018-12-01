<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fundraiser' => 'required|string|max:20',
            'email' => 'required|string|email|max:60',
            'name' => 'required|string|max:100',
            'category_id' => 'required|integer',
            'brief' => 'required|string|max:255',
            'started_at' => 'required',
            'ended_at' => 'required',
            'goal_amount' => 'required|integer',
            'description' => 'required|string',
            'img_path' => 'required|',
            'relative_web' => 'required|string|max:255',
            'feedbacks.*.price' => 'required|integer',
            'feedbacks.*.date' => 'required',
            'feedbacks.*.description' => 'required|string',
        ];
    }
}
