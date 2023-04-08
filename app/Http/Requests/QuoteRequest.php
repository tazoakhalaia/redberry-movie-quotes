<?php

namespace App\Http\Requests;

use Doctrine\Inflector\Rules\French\Rules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class QuoteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "title" => 'required',
            'img' => 'required',
            'movie_name' => 'required',
        ];
    }
}
