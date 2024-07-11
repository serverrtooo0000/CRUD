<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;


class LoginRequest extends FormRequest
{
   
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', ],
            'password' => ['required', 'string'],
        ];
    }

}
