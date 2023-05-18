<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller {

    public function home() {
        Session::put('section', 'home');
        return view('admin.dashboard');
    }

    public function parents() {
        Session::put('section', 'parents');
        return view('admin.parents.parents');
    }

    public function students() {
        Session::put('section', 'students');
        $document_types = DocumentType::list();
        return view('admin.students.students', compact('document_types'));
    }

    public function perfil() {
        Session::put('section', 'perfil');
        return view('admin.perfil.perfil');
    }


    /* AUTH VIEWS */
    public function login() {
        $msg_login = session('msg_login');
        (new LoginController)->__flush_session();
        Session::put('section', 'login');
        return view('admin.auth.login', compact('msg_login'));
    }
}
