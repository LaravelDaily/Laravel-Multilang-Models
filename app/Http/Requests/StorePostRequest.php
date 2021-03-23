<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        $rules = [
            'title.en' => 'required',
            'full_text.en' => 'required',
        ];

        foreach (config('app.available_locales') as $locale) {
            $rules['title.' . $locale] = 'string';
            $rules['full_text.' . $locale] = 'string';
        }

        return $rules;
    }
}
