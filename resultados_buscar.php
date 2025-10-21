<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Resultados de búsqueda</title>
	</head>

	<body>
		<header>
				<div class="top_navbar_1">
					<a href="index.php" class="active">Inicio</a>
					<a href="galeria.html">Galería</a>
					<a href="artistas.html">Artistas</a>
					<a href="trasfondo.html">Trasfondo</a>
					<a href="grupos.html">Grupos</a>
					<a href="#">Tienda</a>
					<a href="#"><i class="fa fa-user-circle"></i></a>
				</div>
			</header>
			<div class="fondo1">
				<section>
				<?php
					include('conexion.php');

					$buscar = $_POST['buscar'];

					$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%'");
				?>
				<article style="width:60%;margin:0 auto;border:solid;padding:10px">
                <?php    
                echo "Se buscó: <em>".$buscar."</em><br>"?>
					<p>Cantidad de Resultados: 
					<?php
						$nros=mysqli_num_rows($consulta);
						echo $nros;
					?>
					</p>
					
					<?php
						while($resultados=mysqli_fetch_array($consulta)) {
					?>
					<p>
					<?php	
							echo $resultados['nombre'] . " ";
							echo $resultados['bio'] . " --> ";
					?>
					</p>
					<hr/>
					<?php
						}

						mysqli_free_result($consulta);
						mysqli_close($conexion);

					?>
				</article>
				</section>
			</div>
			</body>
		</html>