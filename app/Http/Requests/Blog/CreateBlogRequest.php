<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
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
            'description' => 'required',
            'short_description' => 'required',
            'status'      => 'required',
            'image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'meta_description' => 'required',
            'meta_keywords'    => 'required',
            'meta_title'       => 'required',
            'date'             => 'required',
            'title'            => 'required|unique:blog',
        ];
    }
}
