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
    <title>Barber Hernan|Nosotros</title>
</head>
<body>
    
    <!-- Inicio Encabezado -->
    <header>
        <?php include("./componentes/headerindex.php"); ?>
    </header>
    <!-- Fin Encabezado -->

    <!-- Inicio de informacion de nosotros -->
    <div class="container">
        <!-- Informacion de la barberia -->
         <div class="row">
            <div class="col mt-3 mb-4">
                <div class="d-flex position-relative " >
                            <img src="./img/baber/logo.jpg" height="200px" class="flex-shrink-0 me-3" alt="...">
                    <div>
                        <h1  style="text-align: center; color:#fff">Barber Hernan</h1>
                        <p style="text-align: justify;margin-right: 15px; color:#fff" >La empresa Barber Hernan tiene una tienda de componentes computacionales como lo son: monitores, CPU, tarjetas graficas etc. Pero esta empresa los ultimos meses ha tenido un bajón en sus ventas así que se les propuso crear una página web para que asi puedan impulsar sus ventas.</p>
                    </div>
                    <div >
                        <img src="./img/logo/jefe.jpg" height="200px" alt="">
                        <p style="text-align: center; color:#fff">Hernan</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mision y visio -->
        <div class="row">
            <!-- Mision -->
            <div class="col-sm-6 mb-3">
                <div>
                    <div class="card-body ">
                        <h2 class="card-title" style="text-align: center; color:#fff;">Misión</h2>
                        <p class="card-text" style="text-align: justify; color:#fff;">La misión principal de este software es ayudar a dicha empresa a ser más reconocida para aumentar las posibilidades de que sus ventas incrementen. Además, buscar un lugar en el mundo digital por medio de la realización de una pagina web, que facilite la interacción Usuario/Cliente con la empresa.</p>
                    </div>
                </div>
            </div>
            <!-- Vision -->
            <div class="col-sm-6 mb-3">
                <div>
                    <div class="card-body">
                        <h2 class="card-title" style="text-align: center; color:#fff;">Visión</h2>
                        <p class="card-text" style="text-align: justify; color:#fff;">Visualizar el objetivo a largo plazo en el que la empresa Tecno Solutions sea más conocida con su primer software llamado "Compu_Start", para así posicionarse en el mercado como una de las empresas con más altos  estándares de calidad y eficacia a la hora  desarrollar el software propuesto por el cliente.</p>
     
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Fin de informacion de nosotros -->

    <!-- Inicio de pie de pagina -->
    <footer>
        <?php include("./componentes/footer.php") ?>
    </footer>
    <!-- Fin de pie de pagina -->

</body>
</html>