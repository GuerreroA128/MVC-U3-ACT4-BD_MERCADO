<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
		
		<label for="id">ID</label>
			<input value="<?php echo $producto->id ?>" class="form-control" name="id" type="number" id="id" placeholder="Escribe el id">
		
			<label for="nombre">Nombre</label>
			<input value="<?php echo $producto->nombre ?>" class="form-control" name="nombre" type="text" id="nombre" placeholder="Escribe el nombre">

			<label for="precio">Precio</label>
			<input value="<?php echo $producto->precio ?>" class="form-control" name="precio" type="number" id="precio" placeholder="Escribe el precio">

			<label for="descripcion">Descripción:</label>
			<textarea id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea>

			<label for="categoria">Categoria:</label>
			<input value="<?php echo $producto->categoria ?>" class="form-control" name="categoria"  type="text" id="categoria" placeholder="Escribe la categoria">

			<label for="marca">Marca:</label>
			<input value="<?php echo $producto->marca ?>" class="form-control" name="marca"  type="text" id="marca" placeholder="Escribe la marca">

			<label for="idproveedor">ID proveedor</label>
			<input value="<?php echo $producto->idproveedor ?>" class="form-control" name="idproveedor" type="number" id="idproveedor" placeholder="Escribe el ID del proveedor">

			<label for="cantidad">Existencia:</label>
			<input value="<?php echo $producto->cantidad ?>" class="form-control" name="cantidad" type="number" id="cantidad" placeholder="Cantidad o existencia">
			
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
