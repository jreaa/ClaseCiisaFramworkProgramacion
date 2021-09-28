<?php 

//conexion mediante mysqli
/*
$cnx = new mysqli(
    'localhost',
    'root',
    '',
    'ciisa_php_avanzado'
);

//echo($cnx->host_info);
//ejecutar sentencias

$sql = "SELECT * FROM  persona";

$personas = $cnx->query($sql);

var_dump($personas);
*/

//conexion por PDO
try{
    $cnx = new PDO('mysql:host=localhost;dbname=ciisa_php_avanzado', 'root', '');
    $sql = "SELECT * FROM  persona";

    $response = $cnx->prepare($sql);
    $response->execute();

    $personas = [];

    foreach($response as $res){
        $personas[] = $res;
    }

    var_dump($personas);
}catch(PDOException $error){
    echo $error;
}


?>

<!--/Select con mysqli/-
<?php //if($personas->num_rows > 0) : ?>
  <?php //while($rows = $personas->fetch_assoc()): ?>
        
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apeliido</th>
                    <th>Edad</th>
                    <th>DNI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?//=$rows['nombre'];?></td>
                    <td><?//=$rows['apellido'];?></td>
                    <td><?//=$rows['edad'];?></td>
                    <td><?//=$rows['dni'];?></td>
                </tr>
            </tbody>
        </table>

    <?php //endwhile; ?> 
<?php //endif;?> 

    -->

    <!--/Select con pdo/-->
<?php if(!empty($personas)) : ?>
  <?php foreach($personas as $rows): ?>
        
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apeliido</th>
                    <th>Edad</th>
                    <th>DNI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><?=$rows['nombre'];?></td>
                    <td><?=$rows['apellido'];?></td>
                    <td><?=$rows['edad'];?></td>
                    <td><?=$rows['dni'];?></td>
                </tr>
            </tbody>
        </table>

    <?php endforeach; ?> 
<?php endif;?> 