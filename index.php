<!DOCTYPE html>
<html>
<head>
	<title>Formulario de registro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	
<form method="POST" action="registrar.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">identificacion</label>
    <input type="text" class="form-control" id="identificador" name="identificador">
    
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">detalle</label>
    <input type="text" class="form-control" id="detalle" name="detalle">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</body>
</html>
