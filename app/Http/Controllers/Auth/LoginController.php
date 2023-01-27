<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Teacher\LoginRequest;
use App\Services\Common\Helpers\UserType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(): Factory|View|Application
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        if(Auth::attempt($data))
        {
            $user = auth()->user();

            Auth::login($user);
            if($user->user_type_id == UserType::ADMIN)
            {
                return redirect()->route('admin.dashboard');
            }
        }
        else
        {
            return redirect()->route('login')->withErrors([
                'login' => 'Login or Password is wrong',
                'password' => 'Password or Password is wrong'
            ]);
        }
    }
}
