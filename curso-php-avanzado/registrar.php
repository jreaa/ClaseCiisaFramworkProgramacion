<?php require_once './vistas/header.php'; ?>


<div class="row">
    <div class="col-md-12">
        <?php if(isset($_SESSION['registro'])): ?>
        <div class="alert alert-success">
            <?= $_SESSION['registro'];?>
        </div>
        <?php unset($_SESSION['registro']); ?> 
        <?php endif; ?>
        <div class="mt-4">
            <div class="card">
                <div class="card-header">
                    Registro en php
                </div>
                <div class="card-body">
                    <form action="controllers/registroController.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-block">
                                Registrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require_once './vistas/footer.php';  ?>