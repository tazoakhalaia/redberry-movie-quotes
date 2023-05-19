<?php

namespace App\Http\Requests\Quote;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title_en' => 'required',
            'title_ka' => 'required',
            'img' => 'required',
            'movie_id' => 'required|exists:movies,id',
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([ 
            'title_en' => json_encode([
                'en' => $this->title_en,
                'ka' => $this->title_ka,
            ]),
        ]);
    }
}
