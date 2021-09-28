<?php 

//mysql_connect
//mysqli
//pdo

//////---------/////
//fecades

//mysqli
//$mysqli = new mysqli("localhost", "usuario", "contraseña", "basedatos");
/*
$cnx = new mysqli("localhost", "root", "","ciisa_clase2");

if($cnx->connect_errno)
{
    echo "error: ". $cnx->connect_errno;
}

$sql = "SELECT * FROM persona";

$response = $cnx->query($sql);
*/
//pdo
//$mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);

try{
    $cnx = new PDO('mysql:host=localhost;dbname=ciisa_clase2', 'root', '');
    $sql = "SELECT * FROM persona";

    $response = $cnx->prepare($sql);
    $response->execute();

    $personas = [];

    foreach($response as $rows)
    {
        $personas[] = $rows;
    }
    var_dump($personas);

}catch(PDOException $error){
    echo "El error es: $error";
}

?>
<!--
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Dni</th>
        </tr>
    </thead>


    <tbody>
        <?php //if($response->num_rows > 0) :?>
            <?php //while($rows = $response->fetch_assoc()): ?>
                <tr>
                    <td>
                       
                    </td>
                    <td>
                       
                    </td>
                    <td>
                     
                    </td>
                    <td>
                      
                    </td>
                </tr>
            <?php //endwhile; ?>
        <?php //endif; ?>
    </tbody>
</table>
            -->

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Dni</th>
        </tr>
    </thead>

    <tbody>
        <?php if(!empty($personas)) :?>
            <?php foreach($personas as $person) :?>
                <tr>
                    <td>
                        <?=$person['nombre'];?>
                    </td>
                    <td>
                        <?=$person['apellido'];?>
                    </td>
                    <td>
                        <?=$person['edad'];?>
                    </td>
                    <td>
                        <?=$person['dni'];?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>