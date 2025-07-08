<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Recuperar contraseña | iscjoseluischavezg</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/login.css" />
</head>

<body>
    <!-- Botón de modo oscuro -->
    <div class="theme-toggle">
        <button id="toggleTheme" class="btn-toggle-theme" title="Cambiar tema">🌙</button>
    </div>

    <div class="login-container">
        <div class="login-card">
            <div class="text-center mb-4">
                <h2 class="logo-title">Recuperar contraseña</h2>
                <p class="subtitle">Ingresa tu correo y te enviaremos instrucciones</p>
            </div>

            <form id="recoverForm" novalidate>
                <div class="form-group mb-4">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control custom-input" id="email" placeholder="correo@ejemplo.com"
                        required />
                    <div class="invalid-feedback">Correo requerido válido.</div>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-login">Enviar instrucciones</button>
                </div>

                <div class="text-center mt-3">
                    <a href="login.php" class="text-link link-effect me-3">Volver al login</a>
                    <a href="registrarse.php" class="text-link link-effect">Crear cuenta</a>
                </div>
            </form>
        </div>
    </div>

    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/recuperar.js"></script>
    <script src="asset/js/main.js"></script>
</body>

</html>