<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeRequest extends FormRequest
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
            //
            'DRPP' => 'required',
            'image' => 'mimes:jpg,bmp,png',
            'Num_poste' => 'required',
            'Affiliation_Financiere' => 'required',
            'Nom' => 'required',
            'Prenom' => 'required',
            'Nom_Français' => 'required',
            'Prenom_Français' => 'required',
            'CIN' => 'required',
            'date_naissance' => 'required',
            'Lieu_Naissance' => 'required',
            'Adresse' => 'required',
            'Telephone' => 'required',
            'Situation_Familiale' => 'required',
            'Nombre_enfant' => 'required',
            'Lieu_Travail' => 'required',
            'date_emboche' => 'required',
            'Situation_Administrative' => 'required',
            'date_recrutement' => 'required',
        ];
    }
}
