<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;

class StoreProfile extends FormRequest
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
            'name' => 'required|min:4',
            //'username' => 'required|min:4',
            'email' => 'required|min:4',
            //'password' => 'required|min:4',
            //'confirm_pass' => 'required_with:pass|min:4'
        ];
    }
}
