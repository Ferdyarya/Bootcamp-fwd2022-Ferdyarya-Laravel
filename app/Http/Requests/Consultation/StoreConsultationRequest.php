<?php

namespace App\Http\Requests\Consultation;

use \App\Http\Model\MasterData\Consultation;
//use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreConsultationRequest extends FormRequest
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
            'consultation_id' =>[
                'required', 'integer', 
                ],
            'name' =>[
                'required', 'string', 'max:255',
                ],
        ];
    }
}
