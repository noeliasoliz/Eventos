<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Detalle_PaqueteRequest extends FormRequest
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