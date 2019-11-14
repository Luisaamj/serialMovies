<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PersonStoreRequest extends FormRequest
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
            'name'=>'bail|required|string|max:50',
            'original_name'=>'string|max:50',
            'birthday'=>'required',
            'job_id'=>'',
            'image'=>'required|image'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Add a name',
            'name.string'=>'Name must be a text',
            'name.max'=>'Name is too long',
            'original_name.string'=>'Original name must be a text',
            'original_name.max'=>'Original name too long',
            'birthday.required'=>'Add a birthday',
            'birthday.date'=>'Birthday must be a date',
            'job_id.required'=>'Select a job',
            'image.required'=>'Choose a picture',
            'image.image'=>'Image must be type image'
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
