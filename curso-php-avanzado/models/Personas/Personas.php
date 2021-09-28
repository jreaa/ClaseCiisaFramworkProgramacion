<?php 

require_once('../vendor/autoload.php'); 
require_once('../models/Database/Database.php');
require_once '../models/CRUD/InterfaceCrud.php';

use Illuminate\Database\Capsule\Manager as DB;

class Personas implements CRUD
{

    public static function index()
    {

    }
    public static function edit($id)
    {
       return DB::table('persona')->where('id', '=', $id)->get();
    }

    public static function create()
    {

    }
    public static function update($nombre,$apellido, $edad, $dni, $id)
    {
        DB::table('persona')->where('id', '=',$id)->update([
            'nombre'   => $nombre,
            'apellido' => $apellido,
            'edad'     => $edad,
            'dni'      => $dni
        ]);
    }
    public static function delete($id)
    {
        DB::table('persona')->where('id', '=', $id)->delete();
    }
}