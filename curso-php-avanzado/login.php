<?php require_once './vistas/header.php'; ?>


<div class="row">
    <div class="col-md-12">
        <?php if(isset($_SESSION['usuarioerror'])): ?>
            <div class="alert alert-danger">
                <?= $_SESSION['usuarioerror'];?>
            </div>
            <?php unset($_SESSION['usuarioerror']); ?> 
        <?php endif; ?>

        <div class="mt-4">

            <div class="card">
                <div class="card-header">
                    Login en php
                </div>
                <div class="card-body">
                    <form action="controllers/loginController.php" method="POST">
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
                                Entrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require_once './vistas/footer.php';  ?>