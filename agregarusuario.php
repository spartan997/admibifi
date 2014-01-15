<?php
	
	include 'config.php';

	if (isset($_POST) && !empty($_POST)) {
		$codLibro = $_POST['codLibro'];
		$nombre = $_POST['nombre'];
		$autor = $_POST['autor'];
		$editorial = $_POST['editorial'];
		$tema = $_POST['tema'];
		$no_inventario = $_POST['no_inventario'];
		$no_topografico = $_POST['no_topografico'];
		$no_adquisicion = $_POST['no_adquisicion'];

		$sql = "INSERT INTO libros(codLibro, nombre, autor, editorial, tema , no_inventario, no_topografico, no_adquisicion) VALUES('$codLibro', '$nombre', '$autor', '$editorial', '$tema' , '$no_inventario', '$no_topografico', '$no_adquisicion')";
		$sql = utf8_decode($sql);

		if ($resul = $mysqli->query($sql)) {
			echo '<script>alert("Libro Agregado");</script>';
		}else{
			echo '<script>alert("Error en la consulta: '.$mysqli->error().'");</script>';
		}
	}

?>
<div class="pages">
	<form method="POST">
		<input type="hidden" id="codLibro" name="codLibro" value="<?php codigo(); ?>">
		<label for="nombre">NOMBRE DEL LIBRO</label>
		<input type="text" id="nombre" name="nombre" required><br>
		<label for="autor">AUTOR</label>
		<input type="text" id="autor" name="autor" required><br>
		<label for="editorial">EDITORIAL</label>
		<input type="text" id="editorial" name="editorial" required><br>
		<label for="tema">TEMA</label>
		<input type="text" id="tema" name="tema" required><br><br>
		<label for="no_inventario"> NO. INVENTARIO </label>
		<input type="number" id="no_inventario" name="no_inventario" requerid><br>
		<label for="no_topografico"> NO. TOPOGRAFICO </label>
		<input type="number" id="no_topografico" name="no_topografico" requerid><br>
		<label for="no_adquisicion"> NO. ADQUISICION </label>
		<input type="number" id="no_adquisicion" name="no_adquisicion" requerid><br>
		<input type="submit" value="Agregar">
	</form>
</div>
