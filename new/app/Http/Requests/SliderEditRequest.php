<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderEditRequest extends FormRequest
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
            'image'=>'nullable|mimes:jpeg,jpg,png,gif,svg|max:200048',
            'title_ka'=>'required',
            'title_en'=>'required'

          ];
    }
}
