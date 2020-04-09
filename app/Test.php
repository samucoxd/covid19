<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Test extends Model
{
    static public function listarUsuarios() {

        $lista = DB::select('
        select tests.id ,users.name as nombre ,tests.created_at from tests
        inner join users on users.id = tests.user_id
        ');
        return $lista;
    }

    static public function detalleTest($id) {

        $lista = DB::select('
        select tests.id ,users.name as nombre ,tests.created_at,tests.temperatura,tests.tos,tests.respirar,tests.salud,tests.edad,tests.ci,tests.correo,tests.telefono,tests.direccion from tests
        inner join users on users.id = tests.user_id where tests.id ='.$id.'
        ');
        return $lista;
    }
}
