<?php
require_once("empleado.php");



$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$boletin = $_POST['boletin'];
$area = $_POST['area'];
$descripcion = $_POST['descripcion'];

$empleado = new empleado();
$reg = $empleado->registro($id, $nombre, $email, $sexo, $boletin, $area, $descripcion);
if ($reg) {
    header("location:index.php");
} else {
    echo "fallo";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>

    <div class="container">
        <form action="POST">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="nombres" placeholder="Nombre completo del empleado" value="<?php echo $row['nombre']  ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="correo" placeholder="Correo electrónico" value="<?php echo $row['email']  ?>">
            </div>
            <label for="exampleFormControlInput1" class="form-label">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="masculino" id="masculino" value="<?php echo $row['sexo']  ?>">
                <label class="form-check-label" for="masculino">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="femenino" id="femenino" value="<?php echo $row['sexo']  ?>">
                <label class="form-check-label" for="femenino">
                    Femenino
                </label>
            </div>
            <div class="mb-3">
                <label for="descripción" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripción" rows="3"></textarea>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="boletin">
                <label class="form-check-label" for="boletin">
                    Deseo recibir boletín informativo
                </label>
            </div>
            <label for="exampleFormControlInput1" class="form-label">Roles</label>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="profesional">
                <label class="form-check-label" for="profesional">
                    Profesional de proyecto Desarrollador
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="gerente">
                <label class="form-check-label" for="gerente">
                    Gerente estratégico
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="auxiliar">
                <label class="form-check-label" for="auxiliar">
                    Auxiliar administrativo
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>


        </form>

    </div>

    <hr>
    <div class="container">
        <div class="col-md-8">
            <table class="table">
                <thead class="table-success table-striped">
                    <tr>
                        <th><i class="fa-solid fa-user"> </i>Nombre</th>
                        <th><i class="fa-solid fa-at"> </i>Email</th>
                        <th><i class="fa-solid fa-venus-mars"></i>Sexo</th>
                        <th><i class="fa-solid fa-toolbox"></i>Area</th>
                        <th><i class="fa-solid fa-envelope"></i>Boletin</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $row['nombre'] ?></th>
                            <th><?php echo $row['email'] ?></th>
                            <th><?php echo $row['sexo'] ?></th>
                            <th><?php echo $row['area_id'] ?></th>
                            <th><?php echo $row['boletin'] ?></th>
                            <th><i class='fa-solid fa-pen-to-square' id=<?php echo $row['cod_estudiante'] ?>></i>Modificar</a></th>
                            <th><i class="fa-solid fa-trash-can" id=<?php echo $row['cod_estudiante'] ?>></i>Eliminar</a></th>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>