<?php
    require './database/conexion.php'; 

    $consulta=$DB_con->prepare('SELECT * FROM cliente WHERE id=:id');
    $consulta->bindParam(':id', $_SESSION['id_usuario']);
    $consulta->execute();
    $cliente=$consulta->fetch(PDO::FETCH_ASSOC);  

?>
<header>
    <nav class="navbar navbar-expand-md border-bottom border-primary">
        <div class="container-fluid">
            <a href="./inicio.php" class="navbar-brand">Barber Hernan</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#MenuNavegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="MenuNavegacion" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto" id="nav1">
                    <li class="nav-item"><a href="./inicio.php" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="./nosotrosinicio.php" class="nav-link">Nosotros</a></li>
                    <li class="nav-item"><a href="./agendarinicio.php" class="nav-link">Agendar Cita</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <label for="" class="centro"><?php echo $_SESSION["usuario"] ?></label>
                        </a>
                        <div class=" transparentes">
                            <ul class="dropdown-menu" id="menu">
                                <li class="nav-item"><a class="nav-link dropdown-item"
                                        href="#">
                                        <i class="fa fa-bag-shopping"></i>
                                       Citas</a></li>
                                <li class="nav-item"><a class="nav-link dropdown-item"
                                        href="./validaciones/cerrarSesion.php"><i class="fa fa-door-open"></i>Cerrar
                                        sesión</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <script>
    function Alerta1() {
        <?php 
            ?>
    }
    </script>
</header>