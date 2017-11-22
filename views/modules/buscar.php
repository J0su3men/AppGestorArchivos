
<!--=====================================
FORMULARIO DE BUSQUEDA
======================================-->
<div class="container">

	<form role="form" id="formSearch" method="POST">

		<h1 class="text-center text-info"><b>BUSCAR</b></h1>
		<hr>

  		<div class="form-group formSearch">
    		<input type="text" name="search" class="form-control" placeholder="Busqueda">
  		</div>

		<ul>
		<?php
$buscar = new Buscar();
$buscar->seleccionarBuscarController();
?>
		<ul>

		<button type="submit" class="btn btn-default">Buscar</button>

	</form>
	<hr>
</div>






<!--====  Fin de FORMULARIO DE INGRESO  ====-->










