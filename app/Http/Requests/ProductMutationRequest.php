<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductMutationRequest extends Request
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
            'size_s' => 'numeric',
            'size_m' => 'numeric',
            'size_l' => 'numeric',
            'size_ll' => 'numeric',
            'size_xl' => 'numeric',
            'size_xxl' => 'numeric',
            'size_xxxl' => 'numeric',
            'qty_topi' => 'numeric'
        ];
    }
}
