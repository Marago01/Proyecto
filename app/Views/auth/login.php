<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Iniciar sesión</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4">
                <br>
                <h4>Iniciar sesión</h4><hr>

                  <?php

                        if(!empty(session()->getFlashdata('success'))){

                            ?> 
                                <div class="alert alert-success">

                                    <?=
                                        session()->getFlashdata('success')
                                    ?>

                                </div>
                            <?php

                        } else if(!empty(session()->getFlashdata('fail'))){

                                ?> 
                                    <div class="alert alert-danger">

                                    <?=
                                        session()->getFlashdata('fail')
                                    ?>

                                    </div>
                                <?php
                        }

                    ?>

                <form action="<?= base_url('auth/loginUser') ?>" method="post" class="form mb-3">

                <?= csrf_field(); ?>


                    <div class="form-group mb-3">
                        <label for="">Usuario</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" required>
                    </div>

                    <div class="form-group mb-3">
                        
                        
                        <input type="submit" class="btn btn-info"  value="Enviar">
                    </div>
                </form>

                
                <a href="<?= site_url('auth/registrar'); ?>">¿No tengo una cuenta?, registrase</a>


            </div>
        </div>
    </div>
</body>
</html>