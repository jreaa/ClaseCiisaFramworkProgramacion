<?php
/*
$persona = [
    //atributos
    'nombre',
    'apellido',
    'dni',
    'edad',
    //metodos
    'comer',
    'respirar',
    'estudiar',
];*/


interface CRUD 
{
    public function create();
    public function read();
    public function update();
    public function delete();
} 

class Persona implements CRUD
{
    private $nombre;
    private $apellido;
    private $dni;
    private $edad;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public static function tipoObjeto()
    {
        return get_class();
    }

    //getters and setters
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function create(){}
    public function read(){}
    public function update(){}
    public function delete(){}
}

class Estudiante extends Persona
{
    public function estudiar()
    {
        return "Estoy estudiando!!!";
    }
}

$persona = new Persona('Jose');
echo "El tipo de dato es: " ;
print_r(get_class_methods($persona));

echo '<br>';
echo '<br>';
echo '<br>';
echo '<hr>';
echo '<h3>Objeto con herencia: </h3>';

$estudiante = new Estudiante('Alejandro');
echo $estudiante->estudiar();


