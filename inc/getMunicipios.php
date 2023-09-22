<?php

/**
 * Script para obtener una lista de municipios asociados a un estado.
 * Este script es accedido mediante una petición AJAX y devuelve opciones
 * de municipios basadas en el estado seleccionado por el usuario.
 *
 * @link https://github.com/mroblesdev
 * @author mroblesdev
 */

require 'conexion.php';

$idEstado = $mysqli->real_escape_string($_POST['id_estado']);

$sql = $mysqli->query("SELECT id, municipio FROM t_municipio WHERE id_estado=$idEstado");

$respuesta = "<option value='0'>Seleccionar</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['municipio'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
