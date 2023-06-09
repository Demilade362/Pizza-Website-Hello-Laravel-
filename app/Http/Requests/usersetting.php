<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersetting extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|min:5',
            'avatar' => 'mimes:jpg,jpeg,jfif,png,svg|max:7000',
        ];
    }
}
