<?php
# Salir si alguno de los datos no está presente
if (
    !isset($_POST["id"]) ||
    !isset($_POST["nombre"]) ||
    !isset($_POST["precio"]) ||
    !isset($_POST["descripcion"]) ||
    !isset($_POST["categoria"]) ||
    !isset($_POST["marca"]) ||
    !isset($_POST["idproveedor"]) ||
    !isset($_POST["cantidad"])
) exit();

# Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$idproveedor = $_POST["idproveedor"];
$cantidad = $_POST["cantidad"];

try {
    $sentencia = $base_de_datos->prepare("UPDATE productos SET 
        id = ?,
        nombre = ?,
        precio = ?,
        descripcion = ?,
        categoria = ?,
        marca = ?,
        idproveedor = ?,
        cantidad = ?
        WHERE id = ?");

    $resultado = $sentencia->execute([$id, $nombre, $precio, $descripcion, $categoria, $marca, $idproveedor, $cantidad, $id]);

    if ($resultado === TRUE) {
        header("Location: ./listar.php");
        exit;
    } else {
        echo "Error al ejecutar la consulta de actualización.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
