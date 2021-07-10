<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Mi sistema</title>
</head>

<body>
    <?php require 'partials/navbar.php' ?>
    <br><br>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">REGISTRATE</div>
                        <div class="card-body">
                            <form action="/adm" method="POST">
                                <br><br>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                                    <div class="col-md-6">
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Escribe tu Nombre" required autofocus autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-right">Apellido</label>
                                    <div class="col-md-6">
                                        <input type="text" id="lastname" class="form-control" name="lastname" placeholder="Escribe tu Apellido" required autofocus autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user" class="col-md-4 col-form-label text-md-right">Nombre de usuario</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user" class="form-control" name="user" placeholder="Escribe tu nombre de usuario" required autofocus autocomplete="off">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="emailAccount" class="col-md-4 col-form-label text-md-right">Correo 
                                        electronico</label>
                                    <div class="col-md-7">
                                        <input type="email" id="emailAccount" class="form-control" placeholder="example@example.com" name="emailAccount" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password2" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password2" class="form-control" name="password2" placeholder="Escribe tu contraseña" required autofocus>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-success">
                                        Registrar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>