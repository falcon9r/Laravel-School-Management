<?php

namespace App\Http\Requests\Admin\Classes;

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
    public function rules() : array
    {
        return [
            'sign' => 'required|string|min:1|max:1|classUniqueName',
            'number' => 'required|integer|classUniqueName',
            'classroom_teacher' => 'required|exists:users,id',
        ];
    }
}
