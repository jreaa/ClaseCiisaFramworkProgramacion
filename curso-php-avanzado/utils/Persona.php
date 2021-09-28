<?php
//interfaces : un contrato que vamos a declarar y el cual tendra que ser totalmennt
//cumplido por dicho objeto al cual se le implemente.

interface Crud
{
    public function create();
    public function update();
    public function read();
    public function delete();
}


class Persona implements Crud
{  
    //atributos
    private $nombre;
    private $apellido;
    private $edad;
    private $dni;

    function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    //metodos
    public function caminar()
    {
        return "$this->nombre $this->apellido - Estas caminando";
    }

    public static function tipoObjeto()
    {
        return "El tipo de objeo es:" . get_class();
    }

    public function create(){

    }
    public function update(){

    }
    public function read(){

    }
    public function delete(){

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
    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
} 

class Estudiante extends Persona
{
    public function asistencia($asistencia = false)
    {
        if($asistencia){
            $value =  $this->getNombre() ." - ". $this->getApellido() . " Esta asistente ";
        }else{
            $value =  $this->getNombre() ." - ". $this->getApellido() . "No esta asistente ";
        }
        return $value;
    }
}


$persona = new Persona('Jose', 'Era');
echo($persona->caminar());
echo '<br>';
echo(Persona::tipoObjeto());
echo "<br>";
echo "<br>";
echo "<br>";
echo "<hr>";
echo "<h3>Desarrollo de objeto por herencia</h3>";
echo "<hr>";

$estudiante = new Estudiante('Alejandro', 'Lopez');

echo($estudiante->asistencia());

//scope => alcance que va a tener  nuestras variables o metodos

/*
$carro = [
    'puertas',
    'cauchos',
    'motor',
    'etc'
];

$persona = [
    'nombre',
    'apellido',
    'edad',
    'dni'
]
$persona = [
    'caminar',
    'correr',
    'respirar',
    'estudiar'
]*/

