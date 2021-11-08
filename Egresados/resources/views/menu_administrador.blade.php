<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
  <body>
   <div class="container-fluid">
    <!-- BARRA NAVEGACIÓN -->
    <div class="bg-light">
		<nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-primary">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Sistema de seguimiento de egresados UNTELS</a>
                <button type="button"
                    class="navbar-toggler"
                    data-bs-toggle="collapse"
                    data-bs-target="#MenuNavegacion">
                        <span class="navbar-toggler-icon"></span>
                </button>
            </div>

			<div id="MenuNavegacion" class="collapse navbar-collapse">

                <ul class="navbar-nav ms-3">
					<li class="nav-item">
                        <a class="nav-link text-nowrap" href="#">icono casa</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-5">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                          icono user
                        </a>
                        <ul class="dropdown-menu ">
                          <li><a class="dropdown-item" href="#">Mi perfil</a></li>
                          <li><a class="dropdown-item" href="#">Cambiar contraseña</a></li>
                          <li><a class="dropdown-item" href="#">Cerrar sesion</a></li>
                        </ul>
                    </li>
				</ul>
			</div>
		</nav>
	</div>
