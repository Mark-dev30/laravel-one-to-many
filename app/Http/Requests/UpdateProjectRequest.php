<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', Rule::unique('projects')->ignore($this->project), 'max:50'],
            'content' => ['nullable']
        ];
    }

    public function messages()
    {

        return [
            'title.required' => 'Title must be entered',
            'title.unique' => 'A project with this name already exists',
            'title.max' => 'The title cannot exceed :max characters'
        ];
    }
}
