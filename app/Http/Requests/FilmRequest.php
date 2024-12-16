<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:2', 'max:120'],



            'date' => ['required'],

            'category_id' => ['integer'],
            'year_id' => ['integer'],
            'season_id' => ['integer'],
            'rating_id' => ['integer'],
            'status_id' => ['integer'],
            'age_id' => ['integer'],
            'quality_id' => ['integer'],
            'duration_id' => ['integer'],
            'view' => ['integer']
        ];
    }
}
