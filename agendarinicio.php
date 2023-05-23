<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- iconos en fontawesome -->
    <script src="https://kit.fontawesome.com/4b93f520b2.js" crossorigin="anonymous"></script>
    <!-- css footer y el header -->
    <link rel="stylesheet" href="./css/footer-header.css">
    <!-- css carusel -->
    <link rel="stylesheet" href="./css/carusel-productos.css">
    <!-- css estilo general -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Barber Hernan|Agendar</title>
</head>
<body>
    
    <!-- Inicio Encabezado -->
    <header>
        <?php include("./componentes/hederinicio.php"); ?>
    </header>
    <!-- Fin Encabezado -->

<!-- inicio Agendar cita -->
<div class="container">
        <div class="form-image">
            <img src="./img/baber/barber_agendar.jpeg" alt="">
        </div>
        <div class="form">
            <form  action="./validaciones/AgregarProducto.php"  method="post" enctype="multipart/form-data">
                <div class="form-header">
                    <div class="title">
                        <h1>Agendar Cita</h1>
                    </div>
                </div>

                <div class="input-group">

                    <div class="input-box">
                        <label for="corte" class="form-label" >Seleccione el corte que se va realizar</label>
                        <select name="corte" id="corte" class="form-select">
                            <option disabled selected hidden>Seleccione</option>
                            <option value="S/M">El broklin</option>
                            <option value="M/L">El jerzi</option>
                            <option value="M/L">El hongo</option>
                            
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="fecha" class="form-label" >Fecha del corte</label>
                        <input type="date" >
                    </div>

                    <div class="">
                        <label for="precio">Servicios</label>
                        <div class="conf" >
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Corte de adulto (13.000)</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option2">
                            <label class="form-check-label" for="inlineCheckbox1">Corte de niño (10.000)</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option3">
                            <label class="form-check-label" for="inlineCheckbox2">Barba (3.000)</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                            <label class="form-check-label" for="inlineCheckbox3">Cejas (3.000)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group" >
                    <br><br><br>
                    <div class="input-box">
                        <label for="descripcion">Descripcion</label>
                        <textarea id="descripcion" type="text" name="descripcion" placeholder="Digite una descripcion" style="height: 100px; width:35rem;" required></textarea>
                        
                    </div>
                </div>

                
                <div class="continue-button">
                    <button><a href="#">Agendar Cita</a> </button>
                </div>
            </form>
        </div>
    </div>
    <!-- fin Agendar cita -->



    <!-- Inicio de pie de pagina -->
    <footer>
        <?php include("./componentes/footer.php") ?>
    </footer>
    <!-- Fin de pie de pagina -->


</body>
</html>