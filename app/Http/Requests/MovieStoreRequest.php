<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class MovieStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'bail|required|unique:movies|string|max:100',
            'description' =>'bail|required|string|max:255',
            'imdb'=> 'bail|required|between:0,10',
            'image'=> 'bail|required|image',
            'year'=> 'bail|required',
            'releaseDate'=>'bail|required|date',
            'type_id'=>'bail|required',
            'category_id'=>'bail|required',
            'language_id'=>'bail|required',
            'country_id'=>'bail|required',
            'diretor_id'=>'bail',
            'star1_id'=>'bail',
            'star2_id'=>'bail',
            'star3_id'=>'bail'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Add a title of the movie',
            'title.unique'=>'Movie already exists',
            'title.string'=>'Movie title must be text',
            'title.max'=>'Movie title cannot exceed 100 characteres',
            'description.required'=>'Add a description of the movie',
            'description.string'=>'Movie description must be text',
            'description.max'=>'Movie title cannot exceed 255 characteres',
            'imdb.required'=>'Add a imdb score of the movie',
            'imdb.between'=>'Imdb score must be between 0 and 10',
            'image.required'=>'Add a image of the movie',
            'image.image'=>'Movie image must be an image',
            'year.required'=>'Add a year',
            //'year.year'=>'Movie year must be an year',
            'releaseDate.required'=>'Add a release date of the movie',
            'releaseDate.date'=>'Movie release date must be a date',
            'type_id.required'=>'Add a type of the movie (movie or serie)',
            'category_id.required'=>'Add the category of the movie',
            'language_id.required'=>'Add the language of the movie',
            'country_id.required'=>'Add the country of the movie'
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'data' => $validator->errors(),
                    'msg' => 'Erro de validação.'
                ], 422));
    }
}
