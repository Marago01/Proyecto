<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 
    <title>Principal</title>
</head>
<body>
    
    <div class="container">

        <nav>
            <ul>
                <li><a href="#" class="logo">
                    <img src="./imagenes/biblioteca.jpg" alt="">
                    <span class="nav-item">Biblioteca</span>
                </a></li>
                <li><a href="#">
                    <i class="fas fa-home"></i>
                    <span class="nav-item">Inicio</span>
                </a></li>
                <li><a href="">
                <i class="fas fa-book"></i>
                    <span class="nav-item">Libros</span>
                </a></li>
                <li><a href="">
                <i class="fas fa-user"></i>
                    <span class="nav-item">Personas</span>
                </a></li>
                <li><a href="">
                <i class="fas fa-child"></i>
                    <span class="nav-item">Autores</span>
                </a></li>
                <li><a href="">
                <i class="fas fa-users"></i>
                    <span class="nav-item">Empleados</span>
                </a></li>
                <li><a href="">
                <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Prestamos</span>
                </a></li>
                <li><a href="" onclick="<?= base_url('registrar') ?>" class="cerrar">
                <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Cerrar sesión</span>
                </a></li>
            </ul>
        </nav>
 


        <section class="main">
            <div class="main-top">
                <h1>Resumen</h1>
                <i class="fas fa-user-code"></i>
            </div>
            <div class="main-skills">
                <div class="card">
                    <i class="fas fa-book"></i>
                    <h3>Total de libros</h3>
                    <p>Libros</p>
                    <button>Presiona aqui</button>
                </div>
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h3>Total de personas</h3>
                    <p>Numero de personas</p>
                    <button>Presiona aqui</button>
                </div>
                <div class="card">
                <i class="fa-solid fa-address-card"></i>
                    <h3>Total de prestamos</h3>
                    <p>Prestamos</p>
                    <button>Presiona aqui</button>
                </div>
            </div>
        </section>

    </div>
    
</body>
</html>