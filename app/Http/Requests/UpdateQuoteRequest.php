<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuoteRequest extends FormRequest
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
            'img' => 'nullable|image'
        ];
    }

    public function prepareForValidation()
    {
        $titleEn = $this->input('title_en');
        $titleKa = $this->input('title_ka');
        $encodedQuote = json_encode(['en' => $titleEn, 'ka' => $titleKa]);
        $this->merge([
            'title_en' => $encodedQuote,
        ]);}
        
}
