<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'name_ka' => 'required'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([ 
            'name' => json_encode([
                'en' => $this->name,
                'ka' => $this->name_ka,
            ]),
        ]);
    }
}
