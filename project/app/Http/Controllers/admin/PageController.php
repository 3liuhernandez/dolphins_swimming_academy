<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;

class PageController extends Controller {

    public function home() {
        return view('admin.dashboard');
    }


    /* AUTH VIEWS */
    public function login() {
        $msg_login = session('msg_login');
        (new LoginController)->__flush_session();
        session()->put('section', 'login');
        return view('admin.auth.login', compact('msg_login'));
    }
}
