<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        $style = array(
            'Input-Style' => 'color: #1025b5; text-align: center; border-color: rgba(188,20,197,0.5);
            ::placeholder { color: red; }; font-family: "Roboto", sans-serif; font-size: 16px;',
        );

        $classes = array(

            'Input-Class' => 'form-control rounded-left',

            'Button-Class' => 'btn btn-info btn-block btn-lg rounded-pill submit p-3 px-5 shadow-lg
             position-relative d-flex align-items-center justify-content-center',

            'Regis-Class' => 'btn btn-success btn-block btn-lg rounded-pill submit p-3 px-5 shadow-lg
             position-relative d-flex align-items-center justify-content-center',

            'User-Icon' => 'fa fa-user-o fa-3x',
        );

        return view('Auth.login', compact('style', 'classes'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|max:12',
        ], [
            'email.required' => 'Поле для электронной почты обязательно для заполнения.',
            'email.email' => 'Электронная почта должна быть действительным адресом электронной почты.',
            'email.exists' => 'Такая электронная почта нету',
            'password.required' => 'Поле для пароля обязательно для заполнения.',
            'password.min' => 'Пароль должен быть не менее 6 символов.',
            'password.max' => 'Пароль не может быть длиннее 12 символов.',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return  redirect()->route('index');
        } else {
            return redirect()->back()->withErrors(['password' => 'Логин или пароль неверено']);
        }
    }

    public function registerPage()
    {
        $style = array(
            'Input-Style' => 'color: #1025b5; text-align: center; border-color: rgba(188,20,197,0.5);
            ::placeholder { color: red; }; font-family: "Roboto", sans-serif; font-size: 16px;',
        );

        $classes = array(

            'Input-Class' => 'form-control rounded-left',

            'Button-Class' => 'btn btn-info btn-block btn-lg rounded-pill submit p-3 px-5 shadow-lg
             position-relative d-flex align-items-center justify-content-center',

            'Regis-Class' => 'btn btn-success btn-block btn-lg rounded-pill submit p-3 px-5 shadow-lg
             position-relative d-flex align-items-center justify-content-center',

            'User-Icon' => 'fa fa-user-o fa-3x',
        );

        return view('Auth.registr', compact('style', 'classes'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:12',
            'c_password' => 'same:password',
        ], [
            'name.required' => 'Имя обязательно для заполнения.',
            'name.string' => 'Имя должно быть строкой.',
            'name.max' => 'Имя не должно быть длиннее 255 символов.',
            'email.required' => 'Электронная почта обязательна для заполнения.',
            'email.email' => 'Электронная почта должна быть действительным адресом электронной почты.',
            'email.unique' => 'Эта электронная почта уже зарегистрирована.',
            'password.required' => 'Поле для пароля обязательно для заполнения.',
            'password.min' => 'Пароль должен быть не менее 6 символов.',
            'password.max' => 'Пароль не может быть длиннее 12 символов.',
            'c_password.same' => 'Пароли должны совпадать.',
        ]);

        $data = $request->all();

        $user = User::create($data);

        $user->roles()->attach(2);

        Auth::login($user);

        return redirect()->route('index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
