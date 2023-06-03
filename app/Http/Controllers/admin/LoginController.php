<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\UserAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class LoginController extends Controller
{
    public function check_login(Request $request) {

        $validator = FacadesValidator::make($request->all(), [
            "username" => 'required|string',
            "pass" => 'required|string',
        ],[
            'required' => 'Todos los campos son obligatorios',
            'string' => 'Debe ingresar solo texto'
        ]);

        $datos = $validator->validated();
        $msg_login = 'Autenticación incorrecta';

        $username = $datos['username'];
        $pass = $datos['pass'];
        // try login
        $login = Auth::attempt([
            'username' => $username,
            'password' => $pass
        ]);

        // login successfull
        if ($login && Auth::user()->is_admin) {
            return redirect()->route('admin.home');
        }

        Session::flash('msg_login', $msg_login);
        // error login
        return back();
    }

    public function logout() {
        $this->__flush_session();
        return redirect()->route('admin.login');
    }

    public function __flush_session() {
        session()->flush();
        session()->regenerate();
        session()->save();
        Auth::logout();
    }
}
