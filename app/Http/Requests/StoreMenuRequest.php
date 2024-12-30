<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule; // Import this for Rule facade usage

class StoreMenuRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'menu_catalogue_id' => 'gt:0', // Ensure 'required' is included
            'menu.name' => [
                'required', // Fixed typo: changed 'require' to 'required'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'menu_catalogue_id.gt' => 'Vị trí của menu phải lớn hơn 0.',
            'menu.name.required' => 'Bạn phải tạo ít nhất 1 menu.',
        ];
    }
}
