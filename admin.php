<?php
	// include('conexion.php');
	// echo "<div style='float: left'>Volver a la página principal:<br><br><br><br>  <a href='' onclick='javascript:window.history.back(-1); return false;'><img class='option' src='rsc/imgs/casa.png' /></a></div>";
?>
<html class="photo">
	<head>
		<title>Panel de administración de la biblioteca</title>
		<style>
			.photo{
				background-image: url('rsc/imgs/bibliotecaucam.png');
				background-repeat: no-repeat;
				background-position-x: center;
				background-position-y: center;   
				background-size: 50rem;
			}
            .bodyadmin {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }

			.menu ul{
				list-style-type:none;
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
		</style> 
	</head>
	<body class="bodyadmin">
		<nav class="menu"> 
			<ul>
				<li><a href="index.php">Página de inicio</a></li>
				<li id="pagLibros"><a href="libros.php">Libros</a></li>
				<li id="pagUsuarios"><a href="usuarios.php">Usuarios</a></li>
				<li id="pagReservasActivas"><a href="reservasActivas.php">Reservas activas</a></li>
			</ul>
		</nav> 
	</body>
</html> 