<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeckrecipeRequest extends FormRequest
{
 
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.title' => 'required|string|max:100',
            'post.deck_code' => 'request|string|max:100',
            'post.body' => 'request|string|max:4000',
            //
        ];
    }
}
