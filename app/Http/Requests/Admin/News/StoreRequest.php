<?php

namespace App\Http\Requests\Admin\News;

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
            'photo' => 'mimes:jpeg,png,jpg,gif',
            'title.*' => 'string|nullable',
            'text.*' => 'string|nullable',
            'text.tj' => 'string|required',
            'title.tj' => 'string|required'
        ];
    }
}
