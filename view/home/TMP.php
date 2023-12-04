<?php

include('DB/apiSQL.php');
// Futura actualizacion con guia :D     
$visitedFirst = $_COOKIE['visited'];
if ($visitedFirst == true) {
	// echo "Ya me visitaste"  ; 

} else {
	// echo "Es la primera vez que nos visitas  bienvenido :D "   ; 
	// [ ] cargar tutorial guia xD 
	setcookie('visited', true);
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	<link rel="icon" type="image/png" href="images/C.png">
	<title>Ceaprende - inico</title>
</head>

<body>
	<div class="menuswitch">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<div class="menu">
		<img class="menu__icon" src="https://front.ceaprende.repl.co/images/C.png" alt="El loguito no cargó :(">
		<div class="linea"></div>
		<ul class="menu__modulos">
			<li><span class="menu__item" id="circulos">Circulos</span></li>
			<li><span class="menu__item"  title="post" >Post</span></li>
			<li><span class="menu__item">Preguntas</span></li>
			<li><span class="menu__item">Asesores</span></li>
			<li><span class="menu__item">Ajustes</span></li>
			
		</ul>
	</div>
	<div class="everything">
		<div class="everything__child navigation">
			<label for="search">
				<img src="https://front.ceaprende.repl.co/images/lupa.svg" alt="Lupa" class="navigation__icon-search">
			</label>
			<input class="navigation__search" id="search" type="text" placeholder="Ingrse su busqueda">
		</div>
		<div class="everything__child content">
			<div class="everything__top">
				<!-- pregunta -->
				<input type="text" id="questions" class="questions" placeholder="Has una pregunta!">
			</div>
			<div class="everything__mid">
				<!-- post y circulos -->
				<div class="everything__post">
					<?php
					// POST View max 3  
					$postMAX = getPOSTMAX();

					foreach ($postMAX as $post) {
						echo "
							<div class='post'>
							<div class='post__content'>
								<div class='post__content__title'>
									{$post['Titulopost']}
								</div>
								<div class='post__content__description'>
									{$post['PostText']}
								</div>
								</div>
							</div>

							";

					}

					?>
				</div>
				<div class="circulos">
					<?php
					// Circulos view  max 3  
					?>

					<div class="end-circulos">no deberias poder ver esto</div>
					<div class="puntito">ni esto</div>
				</div>
			</div>
			<div class="everything__bottom">
				<!-- acesores y imagen -->
				<div class="acesores">
					Parece que aun no tienes nada por aqui!
					<!-- 					todo askeroso por no tener tiempo -->
				</div>
				<div class="everything__img">
					<img src="images/default.svg" alt="c proyect">
				</div>
			</div>
		</div>
	</div>
	<script src="static/js/main2.js" type="text/javascript"></script>
</body>

</html>


<!-- TODO:
	[ ] añadir post ya hechos  
	[ ] añadir  por lo menos 1  circulo 
	[ ] añadir 1 persona por roll 
 -->