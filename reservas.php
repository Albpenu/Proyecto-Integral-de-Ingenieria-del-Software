<?php
	include('conexion.php');
	//include('consultas.php');
	session_start();

	
?>


<html>
	<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		
		<title>¡Bienvenido, <?php echo $_SESSION['nombre']; ?>!</title>
		<link rel="stylesheet" href="css/styles.css">
		<style>
			header{
				height: auto;
			}

			.photo{
				background-image: url('rsc/imgs/bibliotecaucam.png');
				background-repeat: no-repeat;
				background-position-x: center;
				background-position-y: center;   
				background-size: 50rem;
				background-color: #e2a300;
			}

			.menu ul{
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #002664;
			}

			.menu li {
				float: left;
			}

			.menu li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			.menu li a:hover:not(.active) {
				background-color: #e2a300;
			}

			.btn_buscar{
				display: inline-block;
                text-decoration: none;
				font-weight: 20px; 
				font-size: 19px; 
				color: white;
				padding-bottom: 5px;
				padding-top: 5px;
				padding-left: 30px; 
				padding-right: 30px;
				background-color: #002664;
				border: 1px solid transparent; 
            }

			.btn_buscar:hover {
				text-decoration: none;
			}
             
            .gradient{
                background-image: linear-gradient(to right, rgba(27, 124, 199), rgba(226, 163, 0));
            }

			.menu ul{
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #002664;
			}

			.menu li {
				float: left;
			}

			.menu li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
			}

			a {
				text-decoration: none;
			}

			.menu li a:hover:not(.active) {
				background-color: #e2a300;
			} 

			.buscarlibro {
				margin: 20px 0px 20px 575px;
				display: inline-block;
				background-color: #fff;
				border: 1px solid #ced4da;
				border-radius: 0.25rem;
				line-height: 1.5;
				font-size: 1rem;
                font-weight: 400;
				padding: 0.375rem 0.75rem; 
				width: 20%;
			}

			.table{
				margin: 0px 0px 0px 300px;
				width:70%;
			}

			thead {
              background-color: #E2A300;
            }
			
			.btn_devolver{
				background-color: #52595D;
				color:white;
			}
			
			

		</style> 
		
	</head>

	<body>
		<header>
			
			<div class="logo">
			<img src="rsc/imgs/logo.png">
		</div>
		<input type="checkbox" id="nav_check" hidden>
		<nav>
			<div class="logo">
			<img src="rsc/imgs/logo.png" alt="">
			</div>
			<div> 
			<ul>
				<li>
					<a href="index.php">Página de inicio</a>
				</li>
				<li>
					<a href="CarnetBiblioteca.php" class="active">Carnet de biblioteca</a>
				</li>
				<li>
					<a href="biblioteca.php">Libros</a>
				</li>
				<li>
					<a href="reservas.php">Reservas</a>
				</li>
      <li>
					<a href="Valoracion.php">Valoración de libros</a>
				</li>
				<li>
					<form name="form" id="formularioBaja" action="consultas.php" method="POST">
						<input style="display: none;" type="text" name="id_baja" value="<?php echo $_SESSION['id_usuario']?>">
						<a id="btnBaja" name="bajaUsuario" href="#" onclick="return confirm('¿Está seguro de que desea eliminar su usuario del sistema?') && document.forms[0].submit();">Darse de baja</a>
					</form>
				</li>
			</ul>
			</div>
		</nav>
		<label for="nav_check" class="hamburger">
			<div></div>
			<div></div>
			<div></div>
		</label>
	</header>

		<div>       
			<h3 style="margin: 0px 0px 0px 675px">Libros Reservados</h3>

			
		</div> 

		<?php
                $id_usuario = $_SESSION['id_usuario'];
                $sql = "SELECT l.id, l.titulo, l.autor, l.genero, l.editorial, l.numero_paginas, l.stock, l.ISBN
					FROM libros l
					INNER JOIN reservas r
					ON l.id = r.id_libro
					WHERE r.id_usuario = $id_usuario";
			$resultado = $connect->query($sql) or die(mysqli_error($connect));
		?> 
			<br>
				<div class="container">
					<table class="table table-striped table-hover">
						<thead>
							<th scope="col">Id</th>
							<th scope="col">Título</th>
							<th scope="col">Autor</th> 
							<th scope="col">Género</th>
							<th scope="col">Editorial</th> 
							<th scope="col">Número de páginas</th>
							<th scope="col">ISBN</th>
							<th scope="col">Stock</th>
						</thead> 
					<tbody>
				<?php
					if (mysqli_num_rows($resultado)>0) {
						while($valor = mysqli_fetch_assoc($resultado)) {
							echo "<form id='formularioReserva' action='reservas.php' method='POST'>
							<input type='text' style='display: none;' name='id_usuario' value='".$_SESSION['id_usuario']."' />
							<input type='text' style='display: none;' name='id_libro' value='".$valor["id"]."' />
							<tr><td align='left'>".$valor["id"]. "</td><td align='left'>" .$valor["titulo"]. "</td><td align='left'>".$valor["autor"]."</td><td align='left'>" .$valor["genero"]. "</td><td align='left'>" .$valor["editorial"]."</td><td align='left'>" .$valor["numero_paginas"]. "</td><td align='left'>" .$valor["ISBN"]."</td><td align='left'>" .$valor["stock"]. "</td><td align='left'>";
						}
				?>
		


		</script> 
				<?php
					} else {
						echo "<tr><td colspan='9' align='center'>0 resultados</td></tr></tbody></table></div>";
					}
				?>
	</body>

</html> 