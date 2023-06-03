<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller {

    function store(Request $request) {
        $validator = Validator::make($request->all(), [
            "name" => 'required|string',
            "last_name" => 'required|string',
            "age" => 'required|int',
            "phone" => 'required|string',
            "email" => 'required|email|unique:students,email',
            "document_type" => 'required|int',
            "document" => 'required|string|unique:students,document',
            "birthdate" => 'nullable|date',
            "parent_code" => 'required_if:age,<,18|int',
        ],[
            'required' => 'Todos los campos son obligatorios',
            'string' => 'Debe ingresar solo texto',
            'document.unique' => 'El Documento ingresado ya ha sido registrado',
            'email.unique' => 'El Correo ingresado ya ha sido registrado',
            'parent_code.required_if' => 'Para los menores de edad, debe registrar al representante primero',
        ]);

        if ( $validator->fails() ) {
            return response()->json($validator->errors(), 422);
        }

        $datos = $validator->validated();

        $student = new Student();
        $student->document = $datos['document'];
        $student->document_type = $datos['document_type'];
        $student->code = null;
        $student->name = $datos['name'];
        $student->last_name = $datos['last_name'];
        $student->birthdate = $datos['birthdate']??null;
        $student->age = $datos['age'];
        $student->email = $datos['email'];
        $student->phone = $datos['phone'];
        $student->parent_code = $datos['parent_code']??null;

        $status = 200;
        $msg = "";

        try {
            $student->save();

            /**
             * crear el codigo de estudiante
             * segun su ID de registro + su nro de documento
             */
            $student->code = "{$student->id}{$student->document}";

            // actualizar
            $student->save();

        } catch (\Throwable $th) {
            $status = 422;
            $msg = $th->getMessage();
        }

        $response = [
            "request" => $datos,
            "student" => $student,
            "msg" => $msg,
            "success" => $status == 200 ? true : false,
        ];

        return response()->json($response, $status);
    }
}
