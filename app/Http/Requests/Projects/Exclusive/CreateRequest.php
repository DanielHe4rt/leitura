<?php

namespace App\Http\Requests\Projects\Exclusive;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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

    public function prepareForValidation()
    {
        $this->merge(['user_id' => auth()->id()]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'delivery_at' => 'required|date',
            'name' => 'required|string',
            'short_description' => 'required|string',
            'short_type' => 'required|string',
            'description' => 'string'
        ];
    }
}
