<?php

namespace App\Http\Requests\Admin\Schedule;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'subjects.*' => 'exists:subjects,id|nullable',
            'teachers.*' => 'exists:users,id|nullable',
            'day' => 'required|integer',
            'class_id' => 'exists:classes,id|required'
        ];
    }
}
