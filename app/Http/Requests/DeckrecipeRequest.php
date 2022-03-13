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
            'deckrecipe.title' => 'required|string|max:100',
            'deckrecipe.deck_code' => 'required|string|max:100',
            'deckrecipe.body' => 'required|string|max:4000',
            //
        ];
    }
}
