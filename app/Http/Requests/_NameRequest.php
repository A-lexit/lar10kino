<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;


class NameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {


        return [
            //
            /*'name' => 'required|string|min:3|max:30|unique:actors|regex:/^[a-яА-Я\-\s]+$/',*/
           /* 'name' => 'regex:/^[a-яА-Я]+[\-\s][a-яА-Я]+$/',*/
            'name' => 'regex:/^[А-Я][a-я]+[\-\s][А-Я][a-я]+$/',



        ];
    }
}
