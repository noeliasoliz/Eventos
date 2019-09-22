<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Detalle_Art_NotaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}