<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\user\RegisterRequest;

class RegisterController extends Controller
{
    public function registerVerification(RegisterRequest $registerRequest)
    {
        User::create([
            'email' => $registerRequest->email,
            'password' => Hash::make($registerRequest->password),
            'nama' => $registerRequest->name,
            'tanggal_lahir' => $registerRequest->birth,
        ]);

        return redirect('/login');
    }
}
