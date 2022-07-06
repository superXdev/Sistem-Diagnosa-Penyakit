<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'logo' => 'file|image|mimes:jpg,png,svg|max:1024',
            'site_name' => 'string|nullable',
            'url' => 'url|nullable',
            'description' => 'string|nullable',
            'keyword' => 'string|nullable'
        ];
    }
}
