<?php 

require_once 'controllers/PersonaControllers.php';
$persona = new Persona; 
$arrayPersonas = json_decode(json_encode($persona->index()), True);
?>

<?php require_once './vistas/header.php'; ?>
    <div class="row">
      <div class="col-md-6">
        <br>
        <h3>
          Tabla de estudiante
        </h3>
        <button class="btn btn-success mb-2" style="float:right">
            Agregar nuevo estudiante
        </button>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Edad</th>
                <th scope="col">DNI</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($arrayPersonas)): ?> 
                <?php foreach($arrayPersonas as $row) :?>
                <tr>
                  <th scope="row"><?=$row['nombre'];?></th>
                  <td><?=$row['apellido'];?></td>
                  <td><?=$row['edad'];?></td>
                  <td>@<?=$row['dni'];?></td>
                  <td>

                      <a href="editPersona.php?id=<?= $row['id'];?>" class="btn btn-secondary mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                      </svg>
                      </a>


                        <a type="submit" class="btn btn-danger" href="controllers/deletePersonaController.php?id=<?= $row['id']; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                        </a>


                     <form action="POST" action="deletePersonaController.php" id="formDelete">
                        <input type="hidden" name="id" value="<?=$row['id'];?>">
                      </form>

                  </td>
                </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <div class="alert alert-warning">
                  Por los momentos no hay ningun dato agregado!!!
                </div>
              <?php endif; ?>
            </tbody>
        </table>
      </div>

      <div class="col-md-6">
        <?php if(isset($_SESSION['usuario'])): ?>
            <div class="alert alert-success">
                <?= $_SESSION['usuario'];?>
            </div>
            <?php unset($_SESSION['usuario']); ?> 
        <?php endif; ?>

      </div>
    </div>

    
<?php require_once './vistas/footer.php';  ?>