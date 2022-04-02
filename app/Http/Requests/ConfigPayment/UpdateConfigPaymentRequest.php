<?php

namespace App\Http\Requests\ConfigPayment;

use \App\Http\Model\MasterData\ConfigPayment;
//use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateConfigPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'config_payment_id' =>[
                'required', 'integer', 
                ],
            'fee' =>[
                'required', 'string', 'max:255',
                ],
            'vat' =>[
                'required', 'string', 'max:255',
                ],
        ];
    }
}