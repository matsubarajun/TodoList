<?php

namespace App\Http\Requests\TaskItem;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'task_id' => 'required|exists:tasks,id',
            'name' => 'nullable|string'
        ];
    }
}
