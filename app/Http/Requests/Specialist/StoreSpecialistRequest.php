<?php

namespace App\Http\Requests\Specialist;

use \App\Http\Model\Operational\Specialist;
//use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreSpecialistRequest extends FormRequest
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
            'specialist_id' =>[
                'required', 'integer', 
                ],
            'name' =>[
                'required', 'string', 'max:255',
                ],
            'price' =>[
                'required', 'string', 'max:255',
                ],
            
        ];
        
    }
}
