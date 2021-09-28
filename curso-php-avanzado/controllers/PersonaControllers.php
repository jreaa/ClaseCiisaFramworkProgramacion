<?php 
require_once('vendor/autoload.php');
require_once('models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

class Persona{
    //mostrar todas las pesonas asco
    public function index()
    {
        $personas = DB::table('persona')->get();
        return $personas;
    }
}