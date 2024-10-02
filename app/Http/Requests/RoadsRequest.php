<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoadsRequest extends FormRequest
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
            'ten_tuyen' => 'required|max:255',
            'diem_dau' => 'required|max:255',
            'diem_cuoi' => 'required|max:255',
        ];
    }
}
