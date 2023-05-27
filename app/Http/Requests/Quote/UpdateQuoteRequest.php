<?php

namespace App\Http\Requests\Quote;

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
            'title' => 'required',
            'img' => 'nullable|image'
        ];
    }

    public function prepareForValidation()
    {

        $this->merge([
            'title' => json_encode([
                'en' => $this->title_en,
                'ka' => $this->title_ka,
            ]),
        ]);
    }

}
