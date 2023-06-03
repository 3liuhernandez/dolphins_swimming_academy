<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $appends = [
        'status_title'
    ];

    public function getStatusTitleAttribute() {
        // TODO: definir los estatus para los estudiantes
        return $this->status == 1 ? 'activo' : 'pendiente';
    }

    public static function list() {
        return Self::where('status', 1)->orderBy("created_at", "desc")->get();
    }

    public static function counter() {
        return Self::list()->count();
    }
}
