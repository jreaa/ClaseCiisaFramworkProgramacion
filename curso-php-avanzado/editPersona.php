<?php 
require_once('vendor/autoload.php'); 
require_once('models/Database/Database.php');

use Illuminate\Database\Capsule\Manager as DB;

$persona = DB::table('persona')->where('id', '=', $_GET['id'])->get(); 
?>

<?php require_once './vistas/header.php'; ?>
    <div class="row">
      <div class="col-md-6">
      <?php if(isset($_SESSION['actualizado'])): ?>
            <div class="alert alert-success">
                <?= $_SESSION['actualizado'];?>
            </div>
            <?php unset($_SESSION['actualizado']); ?> 
        <?php endif; ?>

        <div class="card">
            <div class="card-body">
                <form action="controllers/updatePersonaController.php" method="POST">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" value="<?= $persona[0]->nombre ?> " class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" name="apellido" value="<?= $persona[0]->apellido ?> " class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="text" name="edad" value="<?= $persona[0]->edad ?> " class="form-control">
                    </div>
                    <div class="form-group">
                        <label>DNI</label>
                        <input type="text" name="dni"  value="<?= $persona[0]->dni ?> " class="form-control">
                    </div>
                    <input type="hidden" name="id" value="<?=$persona[0]->id?> " >
                    <div class="form-group">
                        <button class="btn btn-success btn-block">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
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