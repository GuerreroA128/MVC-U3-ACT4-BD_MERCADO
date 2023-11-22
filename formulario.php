<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">

		<label for="nombre">Nombre:</label>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Nombre">

		<label for="precio">Precio</label>
			<input class="form-control" name="precio" type="number" id="precio" placeholder="Precio">

		<label for="descripcion">Descripcion:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"  placeholder="Descripcion"></textarea>

		<label for="categoria">categoria:</label>
		<input class="form-control" name="categoria" required type="text" id="categoria" placeholder="Categoria">

		<label for="marca">Marca:</label>
		<input class="form-control" name="marca" required type="text" id="marca" placeholder="Marca">

		<label for="idproveedor">ID Proveedor:</label>
		<input class="form-control" name="idproveedor" required type="text" id="idproveedor" placeholder="ID Prpveedor">

		<label for="cantidad">Existencia:</label>
		<input class="form-control" name="cantidad" required type="number" id="cantidad" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>
<?php include_once "pie.php" ?>