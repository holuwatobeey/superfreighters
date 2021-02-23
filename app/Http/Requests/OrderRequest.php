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
        $this->redirect = url()->previous() . '#getStarted';

        return [
            'name' => 'required',
            'email' => 'required|email',
            'origin_country' => 'required',
            'origin_city' => 'required',
            // 'destination_country' => 'required',
            'destination_city' => 'required',
            'parcels' => 'required|integer',
            'weight' => 'required|integer',
            'mode' => 'required',
        ];
    }
}
