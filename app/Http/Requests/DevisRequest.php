<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Carbon\Carbon;

class DevisRequest extends Request
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
        $after_date = Carbon::now()->format('d-m-Y');

        return [
            'nom' => 'required',
            'prenom' => 'required',
            'statut' => 'required',
            'code_postal' => 'required|numeric|digits:4',
            'ville' => 'required',
            'email' => 'required|email',
            'adresse' => 'required',
            'numero' => 'required',
            'date' => 'after:'.$after_date,
            'debut' => 'required',
            'fin' => 'required',
            'g-recaptcha-response' => 'required|recaptcha'
        ];
    }
}
