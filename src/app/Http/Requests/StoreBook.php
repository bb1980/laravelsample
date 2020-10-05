<?php

namespace App\Http\Requests;

use Illuminate\Validation\Factory as ValidationFactory;
use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
{

    public function __construct(ValidationFactory $validationFactory)
    {

        $validationFactory->extend(
            'isbn',
            function ($attribute, $value, $parameters) {
                return preg_match("/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/", $value);
            },
            'Invalid ISBN'
        );

    }

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
            'isbn' => 'isbn|required',
            'title' => 'required',
            'author' => 'required',
            'categories' => 'required|array',
            'price' => 'required',
        ];
    }
}
