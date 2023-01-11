<?php

namespace App\Http\Controllers;


class PageController extends Controller
{

    public function home_page() {
        session()->put('section', 'home');
        return view('welcome');
    }

    public function contact() {
        session()->put('section', 'contact');
        return view('contact');
    }

    public function class() {
        session()->put('section', 'class');
        return view('class');
    }

    /* AUTH VIEWS */
    public function login() {
        $msg_login = session('msg_login');
        (new LoginController)->__flush_session();
        session()->put('section', 'login');
        return view('auth.login', compact('msg_login'));
    }

    public function register() {
        session()->put('section', 'register');
        return view('auth.register');
    }
}
