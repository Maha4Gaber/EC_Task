<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [

            'categori_id' => [
                'required'
            ],
            'name' => [
                'required',
                'string'
            ],
            'desc' => [
                'required',
                'string'
            ],
            'img' => [
                'required',
                // 'mimes:jpg,jpeg,png'
            ],
            'price' => [
                'required',
                'integer'
            ],
            'discount' => [
                'required',
                'integer'
            ],
            'quantity' => [
                'required',
                'integer'
            ],
            'offer' => [
                'required',
                'string'
            ],
            //
        ];
    }
}
