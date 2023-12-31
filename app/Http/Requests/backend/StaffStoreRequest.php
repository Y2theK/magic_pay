<?php

namespace App\Http\Requests\backend;

use Illuminate\Foundation\Http\FormRequest;

class StaffStoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email|unique:admin_users,email',
            'password' => 'required|min:8|max:10',
            'phone' => 'required|numeric|unique:admin_users,phone'
        ];
    }
}
