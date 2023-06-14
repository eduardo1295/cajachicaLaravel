<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateSolicitudRequest extends FormRequest
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
            'serie' => 'required',
            'folio' => 'required',
            'referencia' => 'required',
            'importe' => 'required',
            'idconcepto' => 'required',
            'idDepartamento' => 'required',
            'fechaConsumo' => 'required|date',
            'fechaConsumo' => 'required|date',
            'Fecha' => 'required|date',
            'observacion' => 'required',
        ];
    }
    protected function passedValidation()
    {
        $this->replace(['fechaConsumo' => date('d-m-Y',strtotime($this->fechaConsumo))]);
    }
    protected function prepareForValidation(): void
    {
        $this->merge([
            'fechaConsumo' => date('d-m-Y',strtotime($this->fechaConsumo)),
            'Fecha' => date('d-m-Y',strtotime($this->Fecha)),
        ]);
    }
}
