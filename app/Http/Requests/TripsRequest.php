<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TripsRequest extends FormRequest
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
            'ten_chuyen' => 'required|max:255',
            'ten_tuyen' => 'required|max:255',
        ];
    }
}
