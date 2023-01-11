<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;

class PageController extends Controller {

    public function home() {
        session()->put('section', 'home');
        return view('admin.dashboard');
    }

    public function students() {
        session()->put('section', 'students');
        return view('admin.students.home');
    }


    /* AUTH VIEWS */
    public function login() {
        $msg_login = session('msg_login');
        (new LoginController)->__flush_session();
        session()->put('section', 'login');
        return view('admin.auth.login', compact('msg_login'));
    }
}
