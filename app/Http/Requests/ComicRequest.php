<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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

            'title' => 'required|min:3',
            'description' => 'required|min:3',
            'thumb' => 'required',
            'price' => 'required|min:2|max:10',
            'series' => 'required|min:3|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|min:3|max:50'

        ];
    }

    public function messages(): array
    {
       return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'description.required' => 'La descrizione è un campo obbligatorio',
            'description.min' => 'La descrizione deven contenere almeno :min caratteri',
            'thumb.required' => 'L\'immagine è un campo obbligatorio',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'price:max' => 'Il prezzo può contenere al massimo :max caratteri',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'series.max' => 'La serie può contenere al massimo :max caratteri',
            'sale_date.required' => 'La data è un campo obbligatorio',
            'sale_date.date' => 'Inserie una data aaaa-mm-gg',
            'type.required' => 'Il tipo è un campo obbligatorio',
        ];
    }
}
