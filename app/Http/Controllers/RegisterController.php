<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('regis');
    }

    public function registerVerification(RegisterRequest $registerRequest)
    {
        User::create([
            'email' => $registerRequest->email,
            'password' => $registerRequest->password,
            'name' => $registerRequest->name,
            'birth' => $registerRequest->birth,
        ]);

        return redirect('register');
    }
}
