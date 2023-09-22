<?php

/**
 * Script para obtener una lista de localidades asociados a un municipio.
 * Este script es accedido mediante una petición AJAX y devuelve opciones
 * de localidades basadas en el municipio seleccionado por el usuario.
 *
 * @link https://github.com/mroblesdev
 * @author mroblesdev
 */

require 'conexion.php';

$idMunicipio = $mysqli->real_escape_string($_POST['id_municipio']);

$sql = $mysqli->query("SELECT id, localidad FROM t_localidad WHERE id_municipio=$idMunicipio");

$respuesta = "<option value='0'>Seleccionar</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['localidad'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
