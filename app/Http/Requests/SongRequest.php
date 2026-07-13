<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Available Validation Rules -> https://laravel.com/docs/13.x/validation#available-validation-rules
        return [
            'name' => 'required | min:3',
            'artist' => 'required',
            'album' => 'required',
            'vote' => 'required'
        ];
    }

    public function messages() {

    return [
        'name.required' => 'Nome canzone è un valore obbligatorio',
        'artist.required' => 'Artista è un valore obbligatorio',
        'album.required' => "L'Album è un valore obbligatorio",
        'vote.required' => 'Il voto è un valore obbligatorio'

    ];

    }

}
