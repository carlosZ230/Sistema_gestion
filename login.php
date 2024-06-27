<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8"> <!-- Codificación de caracteres -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Compatibilidad con IE -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Vista en Dispositivos Móviles -->
    <meta name="descripcion" content>
    <meta name="autor" content>
    <title>INICIAR SESIÓN | SISTEMA DE GESTIÓN UEBF</title>
    <link rel="shortcut icon" href="imagenes/logo.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <!-- ejemplo-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"
                                style="background-image: url('imagenes/profesor.png'); background-size: 90% auto; background-position: center; background-repeat: no-repeat;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h1 text-gray-900 mb-3">Inicio de Sesión</h1>
                                        <p class="text-gray-900 mb-3">Por favor, introduzca sus credenciales para acceder al sistema</p>
                                    </div><br>
                                    <form class="user" action="../Sistema_Notas/Crud/lg_admin.php" method="post">
                                        <div class="form-group">
                                            <label for="identificationNumber">Número de identificación</label>
                                            <input type="text" class="form-control form-control-user" id="cedula"
                                                name="cedula" aria-describedby="emailHelp"
                                                placeholder="Ingrese su número de identificación..."
                                                oninput="javascript: if (this.value.length > 15) this.value = this.value.slice(0, 15).replace(/[^0-9]/g, '');"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contrasena">Contraseña</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="contrasena" name="contrasena"
                                                    placeholder="Ingrese su contraseña" required >

                                                <button class="btn btn-outline-secondary btn-toggle-password"
                                                    type="button" onclick="MostrarClave()">Mostrar</button>

                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block"
                                            id="submit-button">Iniciar Sesion</button>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <span class="small">¿No tiene una cuenta? </span>
                                        <a class="small" href="enviar_soli.php">Solicite una al administrador</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
                function MostrarClave() {
            var passwordField = document.getElementById('contrasena');
            var toggleButton = document.querySelector('.btn-toggle-password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleButton.textContent = 'Ocultar';
            } else {
                passwordField.type = 'password';
                toggleButton.textContent = 'Mostrar';
            }
        }

        document.getElementById('identificationNumber').addEventListener('input', function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

    </script>

    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>