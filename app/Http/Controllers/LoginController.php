<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller {

    public function check_login(Request $request) {

        $validator = Validator::make($request->all(), [
            "email" => 'required|string',
            "pass" => 'required|string',
        ],[
            'required' => 'Todos los campos son obligatorios',
            'string' => 'Debe ingresar solo texto'
        ]);

        $datos = $validator->validated();
        $msg_login = 'Autenticación incorrecta';

        $email = $datos['email'];
        $pass = $datos['pass'];

        // try login
        $login = Auth::attempt([
            'email' => $email,
            'password' => $pass
        ]);

        // login successfull
        if ($login) {
            return redirect()->route('home');
        }

        Session::flash('msg_login', $msg_login);
        // error login
        return back();

    }

    public function logout() {
        $this->__flush_session();
        return redirect()->route('login');
    }

    public function __flush_session() {
        session()->flush();
        session()->regenerate();
        session()->save();
        Auth::logout();
    }
}