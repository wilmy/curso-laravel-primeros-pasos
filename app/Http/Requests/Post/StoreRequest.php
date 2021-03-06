<?php

namespace App\Http\Requests\Post;

use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class StoreRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::of($this->title)->slug()
        ]);  
    }

    function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        if($this->expectsJson())
        {
           $response = new Response($validator->errors(), 422);
            throw new ValidationException($validator, $response); 
        }
    }
    

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
            'title' => "required|min:5|max:500", 
            'slug'  => "required|min:5|max:500|unique:posts", 
            'content'  => "required|min:5", 
            'description'  => "required|min:5", 
            'posted'  => "required", 
            'category_id'  => "required|integer",
        ];
    }
}
