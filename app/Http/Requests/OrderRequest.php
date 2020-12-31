<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'service_id' => 'required|exists:services,id',
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'car_make' => 'required|string',
            'model' => $this->request->get('model') ? 'required|string|min:2' : '',
            'fuel_type' => $this->request->get('fuel_type') ? 'required|string|min:2' : '',
            'engine_size' => $this->request->get('engine_size') ? 'required|string|min:2' : '',
            'problem' => 'required|string:5',
            'localization' => 'required|string:5',
            'desired_date' => 'required',
        ];
    }
}
