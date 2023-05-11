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
    <title>Barber Hernan| Inicio</title>
</head>
<body>
    <!-- Inicio Encabezado -->

    <header>
        <?php include("./componentes/headerindex.php"); ?>
    </header>
    <!-- Fin Encabezado -->
    <!-- Inicio Carrusel -->
        <div>
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="./img/carrusel/carusel1.jpg" class="d-block w-100" height="400px" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="./img/carrusel/carusel2.jpeg" class="d-block w-100" height="400px" alt="...">
                    </div>
                    <div class="carousel-item">
                    <img src="./img/carrusel/carusel3.jpeg" class="d-block w-100" height="400px" alt="...">
                    </div>
                </div>
            </div>
        </div>
    <!-- Fin Carrusel -->
    <!-- Inicio Card informacion de la barberia breve -->
        <div>
            <div class="card mb-3 w-100" >
                        <div class="row g-0">
                        <div class="col-md-6">
                        <img src="./img/baber/logo.jpg" class="img-fluid rounded-start" alt="logo de la barberia">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h2 class="card-title">Baber Hernan</h2>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    <!-- Fin Card informacion  -->
    <!-- Inicio productos -->
        <div class="container mb-3">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <div class="conf">
                                 <img src="./img/cortes/corte1.jpg" class="card-img-top" alt="...">
                                </div>
                            <div class="card-body">
                                <h5 class="card-title">Corte 1</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            </div>
                        </div>

            <div class="col">
                <div class="card">
                <div class="conf">
                    <img src="./img/cortes/corte2.jpg" class="card-img-top" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="card-title">Corte 2</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>

            </div>
            <div class="col">
                <div class="card">
                <div class="conf">
                    <img src="./img/cortes/corte3.jpg" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Corte 3</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <div class="conf">
                     <img src="./img/cortes/corte4.jpg" class="card-img-top" alt="...">
                    </div>
                <div class="card-body">
                    <h5 class="card-title">Corte 4</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                </div>
            </div>
            </div>
        </div>

    <!-- Fin productos -->









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</body>
</html>