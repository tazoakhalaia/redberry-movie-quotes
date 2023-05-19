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
       
        $this->merge([ 
            'title_en' => json_encode([
                'en' => $this->title_en,
                'ka' => $this->title_ka,
            ]),
        ]);
    }
        
}
