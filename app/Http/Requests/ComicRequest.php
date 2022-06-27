<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicRequest extends FormRequest
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
            'title' => ['required', Rule::unique('comics', 'title')->ignore($this->comic), 'max:100'],
            'description' => ['nullable'],
            'thumb' => 'nullable|url',
            'price' => ['nullable', 'numeric'],
            'series' => ['nullable'],
            'sale_date' => ['nullable', 'date'],
            'type' => ['nullable'],
        ];
    }
}