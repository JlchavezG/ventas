<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dashboard | iscjoseluischavezg</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/app.css" />
</head>

<body>

    <!-- Navbar -->
    <header class="navbar-top d-flex justify-content-between align-items-center px-3">
        <div class="d-flex align-items-center">
            <button id="toggleSidebar" class="btn btn-sm btn-toggle me-3">
                <svg class="bi" width="32" height="32" fill="currentColor">
                    <use xlink:href="asset/icons/bootstrap-icons.svg#list" />
                </svg>
            </button>
            <h5 class="mb-0 text-white">iscjoseluischavezg | Sistema</h5>
        </div>
        <div>
            <span>Hola: Jose Luis Chavez</span>
            <button id="toggleTheme" class="btn btn-sm btn-theme" title="Cambiar tema">🌙</button>
            <a href="cerrar_sesion.php" class="link-navbar">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="asset/icons/bootstrap-icons.svg#bell-fill" />
                </svg><span> </span>
            </a>
            <a href="cerrar_sesion.php" class="link-navbar">
                <svg class="bi" width="20" height="20" fill="currentColor">
                    <use xlink:href="asset/icons/bootstrap-icons.svg#power" />
                </svg><span> Cerrar sesión</span>
            </a>
        </div>
    </header>

    <!-- Sidebar + Content -->
    <div class="d-flex">
        <!-- Sidebar -->
        <nav id="sidebar" class="sidebar">
            <ul class="nav flex-column pt-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#house-door" />
                        </svg><span>Inicio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#box" />
                        </svg><span>Productos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#person-circle" />
                        </svg>
                        <span>Usarios</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#people" />
                        </svg>
                        <span>Clientes</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#pie-chart-fill" />
                        </svg>
                        <span>Inventario</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#file-earmark-text-fill" />
                        </svg>
                        <span>Facturas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#bag-fill" />
                        </svg>
                        <span>Ventas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#journals" />
                        </svg>
                        <span>Catalogo</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#search" />
                        </svg>
                        <span>Busqueda</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#bell-fill" />
                        </svg>
                        <span>Notificaciones</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#chat-left-text-fill" />
                        </svg>
                        <span>Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#currency-dollar" />
                        </svg>
                        <span>Vendedor</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#person-fill-gear" />
                        </svg>
                        <span>Perfil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#power" />
                        </svg>
                        <span>Cerrar Sesiom</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <svg class="bi" width="20" height="20" fill="currentColor">
                            <use xlink:href="asset/icons/bootstrap-icons.svg#person-circle" />
                        </svg>
                        <span>Nombre Usuario</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Contenido Principal -->
        <main class="content flex-fill p-4">
            <h2 class="mb-4">Bienvenido, <?= htmlspecialchars($_SESSION["email"]) ?></h2>
            <p class="lead">Este es tu panel principal. Aquí podrás gestionar productos, clientes y reportes del sistema
                de ventas.</p>
            <!-- Aquí podrías agregar tarjetas, gráficas, etc. -->
            <div class="container py-5">
                <div class="row g-4">

                    <!-- Card 1 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="dashboard-card border-start border-primary border-4 shadow-sm">
                            <div class="icon-circle bg-primary">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="asset/icons/bootstrap-icons.svg#bar-chart-line" />
                                </svg>
                            </div>
                            <div class="text-end w-100">
                                <p class="label">Ventas</p>
                                <h4 class="value">$24,580</h4>
                                <small class="desc">Este mes</small>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="dashboard-card border-start border-success border-4 shadow-sm">
                            <div class="icon-circle bg-success">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="asset/icons/bootstrap-icons.svg#people-fill" />
                                </svg>
                            </div>
                            <div class="text-end w-100">
                                <p class="label">Usuarios</p>
                                <h4 class="value">1,250</h4>
                                <small class="desc">Activos</small>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="dashboard-card border-start border-warning border-4 shadow-sm">
                            <div class="icon-circle bg-warning text-white">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="asset/icons/bootstrap-icons.svg#cart-check-fill" />
                                </svg>
                            </div>
                            <div class="text-end w-100">
                                <p class="label">Pedidos</p>
                                <h4 class="value">893</h4>
                                <small class="desc">Este mes</small>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="dashboard-card border-start border-danger border-4 shadow-sm">
                            <div class="icon-circle bg-danger">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="asset/icons/bootstrap-icons.svg#bell-fill" />
                                </svg>
                            </div>
                            <div class="text-end w-100">
                                <p class="label">Alertas</p>
                                <h4 class="value">13</h4>
                                <small class="desc">Críticas</small>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row g-4 mt-2">
                    <!-- Card 5 -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="dashboard-card border-start border-success border-4 shadow-sm">
                            <div class="icon-circle bg-success">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="asset/icons/bootstrap-icons.svg#bell-fill" />
                                </svg>
                            </div>
                            <div class="text-end w-100">
                                <p class="label">Alertas</p>
                                <h4 class="value">13</h4>
                                <small class="desc">Críticas</small>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="dashboard-card border-start border-secondary border-4 shadow-sm">
                            <div class="icon-circle bg-secondary">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="asset/icons/bootstrap-icons.svg#bell-fill" />
                                </svg>
                            </div>
                            <div class="text-end w-100">
                                <p class="label">Alertas</p>
                                <h4 class="value">13</h4>
                                <small class="desc">Críticas</small>
                            </div>
                        </div>
                    </div>
                    <!-- Card 7 -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="dashboard-card border-start border-info border-4 shadow-sm">
                            <div class="icon-circle bg-info">
                                <svg class="bi" width="20" height="20" fill="currentColor">
                                    <use xlink:href="asset/icons/bootstrap-icons.svg#bell-fill" />
                                </svg>
                            </div>
                            <div class="text-end w-100">
                                <p class="label">Alertas</p>
                                <h4 class="value">13</h4>
                                <small class="desc">Críticas</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>

    <script src="asset/js/app.js"></script>
</body>

</html>