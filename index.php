<?php

/**
 * Este archivo carga el formulario para seleccionar estados, municipios y localidades.
 * Además, incluye los scripts JavaScript para manejar laspeticiones AJAX
 * y actualizar dinámicamente las opciones de selección.
 *
 * @link https://github.com/mroblesdev
 * @author mroblesdev
 */

require 'inc/conexion.php';

$estados = $mysqli->query("SELECT id, estado FROM t_estado");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select anidado</title>
</head>

<body>

    <h2>Selects anidados</h2>

    <form action="" method="post">

        <p>
            <label for="estado">Estado:</label>
            <select name="estado" id="estado">
                <option value="">Seleccionar</option>
                <?php while ($row = $estados->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['estado']; ?></option>
                <?php } ?>
            </select>
        </p>

        <p>
            <label for="municipio">Municipio:</label>
            <select name="municipio" id="municipio">
                <option value="">Seleccionar</option>
            </select>
        </p>

        <p>
            <label for="localidad">Localidad:</label>
            <select name="localidad" id="localidad">
                <option value="">Seleccionar</option>
            </select>
        </p>

        <p>
            <button type="submit">Guardar</button>
        </p>

    </form>

    <script src="js/peticiones.js"></script>
</body>

</html>