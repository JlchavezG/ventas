
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | iscjoseluischavezg</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/login.css" />
</head>

<body>
    <!-- Botón de cambio de tema -->
    <div class="theme-toggle">
        <button id="toggleTheme" class="btn-toggle-theme" title="Cambiar tema">🌙</button>
    </div>

    <div class="login-container">
        <div class="login-card">
            <div class="text-center mb-4">
                <h1 class="logo-title">IscJoseLuisChavezG</h1>
                <p class="subtitle">Sistema de ventas moderno y seguro</p>
            </div>

            <form id="loginForm" method="POST" action="include/login.php" novalidate>
                <div class="form-group mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control custom-input" id="email" placeholder="correo@ejemplo.com"
                        required />
                    <div class="invalid-feedback">Correo inválido.</div>
                </div>

                <div class="form-group mb-3 position-relative">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control custom-input" id="password" placeholder="Password"
                        required minlength="6" />
                    <div class="password-toggle-container mt-2">
                        <label class="toggle">
                            <input type="checkbox" id="showPassword" />
                            <span class="slider"></span>
                        </label>
                        <span class="toggle-label">Mostrar contraseña</span>
                    </div>
                    <div class="invalid-feedback">Contraseña requerida (mínimo 6 caracteres).</div>
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox" class="form-check-input" id="rememberEmail" />
                    <label class="form-check-label text-secondary" for="rememberEmail">Recordar correo</label>
                </div>

                <div class="d-grid mb-3">
                    <input type="submit" class="btn btn-login" value="Iniciar sesión">
                </div>

                <div class="text-center">
                    <a href="recuperar_password.php" class="text-link link-effect me-3">¿Olvidaste tu contraseña?</a>
                    <a href="#" class="text-link link-effect">Crear cuenta</a>
                </div>
            </form>
        </div>
    </div>


    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/login.js"></script>
</body>

</html>