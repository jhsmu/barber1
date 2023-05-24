<?php 

        include './Database/conexion.php';

        $consulta = "SELECT * FROM citas";

        $consulta1 = $DB_con->prepare($consulta);
        $consulta1->execute();

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
    <title>Barber Hernan|Citas</title>
</head>
<body>

    <!-- Inicio Encabezado -->
    <header>
        <?php include("./componentes/hederinicio.php"); ?>
    </header>
    <!-- Fin Encabezado -->

    <div class="container">
    <table class="table table-light table-bordered">

        <tbody>
            <tr>
                <th width= "15%" >Nombres</th>
                <th width= "15%" >Apellidos</th>
                <th width= "30%" >Descripcion</th>
                <th width= "20%" >Fecha De La Cita</th>
            </tr>
        </tbody>
        <thead>
            <?php
            if($consulta1->rowCount() > 0){
                $rows = $consulta1->fetchAll(PDO::FETCH_ASSOC);
                foreach ($rows as $row){
            
            ?>
            <tr>
                <td width= "15%" ><?php ?>echo $row["id"];</td>
                <td width= "15%" ><?php ?>echo $row["corte"];</td>
                <td width= "30%" ><?php ?>echo $row["descripcion"];</td>
                <td width= "20%" ><?php ?>echo $row["fecha"];</td>
            </tr>
            <?php
            }
            ?>
        </thead>
        <?php
                } else {
                ?>
                    <tr>
                        <td colspan="5">
                            <div class="alert alert-success">
                                No hay productos en el carrito
                            </div>
                        </td>
                    </tr>

                <?php
                }
                ?>
    </table>
    </div>
</body>
</html>