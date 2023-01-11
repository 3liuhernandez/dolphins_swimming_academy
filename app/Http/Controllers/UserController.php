<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function get($by = false, $value = false) {
        $users = User::all();
        if ( $by ) {
            $users = $users->where($by, $value);

            // not found
            if ( $users->count() < 1 ) {
                return false;
            }

            // return user data
            if ( $users->count() == 1 ) {
                return $users->first()->toArray();
            }
        }
        // return users list
        return $users->toArray();
    }

    public function new_by_ip($user_ip) {
        $user = new User();
        $user->ip = $user_ip;
        $user->save();
        return $user->first();
    }

    public function register_validation(Request $request) {

        $validator = Validator::make($request->all(), [
            "name" => 'required|string',
            "email" => 'required|email',
            "pass" => 'required|string',
        ],[
            'required' => 'Todos los campos son obligatorios',
            'email' => 'Debe ingresar un email válido'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $datos = $validator->validated();
        $register = $this->store($datos);

        // termino el proceso de registro
        $msg_register = 'registro exitoso';
        $msg_type = 'success';

        // error al registrar al usuario
        if ( !$register ) {
            $msg_register = 'Error al registrar el usuario';
            $msg_type = 'failed';
        }

        // validacion de email repetido
        if ( $register === 2 ) {
            $msg_register = 'El correo ya esta en uso, eliga otro';
            $msg_type = 'failed';
        }

        Session::flash('msg_register', $msg_register);
        Session::flash('msg_type', $msg_type);

        // TODO: ENVIAR CORREO ELECTRONICO AL USUARIO PARA QUE CONFIRME SU CUENTA;

        return back();
    }

    protected function store($data) {
        $check_user = User::get_user_by_email($data['email']);

        // email valido para crear
        if ( !$check_user ) {
            try {
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['pass']);
                $user->save();
                return true;
    
            } catch (\Throwable $th) {
                // handle error
                return false;
            }
        }

        // error el email ya existe en la base de datos
        return 2;
    }
}
