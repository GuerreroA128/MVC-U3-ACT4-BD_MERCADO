<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre"]) ||
 !isset($_POST["precio"]) ||
 !isset($_POST["descripcion"]) ||
 !isset($_POST["categoria"]) ||
 !isset($_POST["marca"]) ||
 !isset($_POST["idproveedor"]) ||
 !isset($_POST["cantidad"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$descripcion = $_POST["descripcion"];
$categoria = $_POST["categoria"];
$marca = $_POST["marca"];
$idproveedor = $_POST["idproveedor"];
$cantidad = $_POST["cantidad"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(
 nombre,
 precio,
 descripcion,
 categoria,
 marca,
 idproveedor,
 cantidad) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $precio, $descripcion, $categoria, $marca, $idproveedor, $cantidad]);
 
if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>