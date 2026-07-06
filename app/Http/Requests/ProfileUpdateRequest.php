<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => ['required', 'string', 'min:2', 'max:12'],
            'email' => ['required', 'string', 'min:5', 'max:40', 'email', Rule::unique(User::class)->ignore($this->user()->id)],
            'password' => ['nullable', 'alpha_num', 'min:8', 'max:20', 'confirmed'],
            'bio' => ['nullable', 'max:150'],
        ];
    }
}
