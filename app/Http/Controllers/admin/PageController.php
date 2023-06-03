<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
use App\Models\DocumentType;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller {

    public function home() {
        Session::put('section', 'home');
        $count_student = Student::counter();
        return view('admin.dashboard', compact('count_student'));
    }

    public function parents() {
        Session::put('section', 'parents');
        return view('admin.parents.parents');
    }

    public function students() {
        Session::put('section', 'students');
        $document_types = DocumentType::list();
        $students = Student::list();

        return view('admin.students.students', compact('document_types', 'students'));
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
