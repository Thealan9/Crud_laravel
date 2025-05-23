<?php

namespace App\Http\Requests\Service;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_client' => 'required|string|max:255',
            'device'=> 'required|string|max:255',
            'model'=> 'required|string|max:255',
            't_service'=> 'required|string|max:255',
            'image'=> 'required|',
            'details'=> 'required|string|max:255',
            'progress'=> 'required|string|max:255'
        ];
    }
}
