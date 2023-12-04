<?php
include('DB/apiSQL.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="static/css/style.css">
    <link rel="stylesheet" type="text/css" href="static/css/post.css">
    <link rel="icon" type="image/png" href="images/C.png">
    <title>EduTec - inicio</title>
</head>

<body>

    <!-- Modal de creación de POST -->
    <div id="crear-post-modal" class="modal">
        <div class="modal-contenido">
            <span class="cerrar">&times;</span>
            <h2 style='color:white;'>Nuevo POST</h2>
            <form id="crear-post-form" >
                <label for="titulo">Título:</label>
                <input type="text" id="titulo" name="titulo" required>
                <label for="contenido">Contenido:</label>
                <textarea id="contenido" name="contenido" required></textarea>
                <button type="submit" id='enviar'>Crear</button>
            </form>
        </div>
    </div>

    <!-- Botón para abrir la modal -->
    <button id="boton-crear-post">+</button>

    <div class="menuswitch">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="menu">
        <a href="https://front.ceaprende.repl.co/">
        <img class="menu__icon" src="https://front.ceaprende.repl.co/images/C.png" alt="El loguito no cargó :(">
        </a>
        <div class="linea"></div>
        <ul class="menu__modulos">
            <li><span class="menu__item" id="circulos">Circulos</span></li>
            <li><span class="menu__item" id="post" >Post</span></li>
            <li><span class="menu__item">Preguntas</span></li>
            <li><span class="menu__item" id="acesores">Asesores</span></li>
            <li><span class="menu__item">Ajustes</span></li>
        </ul>
    </div>
    <div class="everything">
        <div class="everything__child navigation">
            <img src="https://front.ceaprende.repl.co/images/lupa.svg" alt="Lupa" class="navigation__icon-search">

            <input class="navigation__search" type="text" placeholder="Ingrse su busqueda">

        </div>
        <div class="everything__child content">
            <div class="padre">
                <?php
                $postNew = getPOSTMAX(5);
                foreach ($postNew as $post) {
                    $day = json_decode($post['postJSON']);
                    $day = $day->{'fecha'} . ' ' . $day->{'hora'};
                    $userName = getDataUser($post['UserId']);
                    $roll = $userName[0]['Roll'];
                    $userName = $userName[0]['NombreUsuario'];

                    echo "

                        <div class='task' draggable='true'>
                        <div class='tags'>
                            <h4 class='tag'>{$post['Titulopost']}</h4>
                            <div class='user' title='{$roll}'>@{$userName}</div>
                        </div>
                        <p >{$post['PostText']} </p>
                        <div class='stats'>
                            <div>
                                <div><svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'>
                                        <g stroke-width='0' id='SVGRepo_bgCarrier'></g>
                                        <g stroke-linejoin='round' stroke-linecap='round' id='SVGRepo_tracerCarrier'></g>
                                        <g id='SVGRepo_iconCarrier'>
                                            <path stroke-linecap='round' stroke-width='2' d='M12 8V12L15 15'></path>
                                            <circle stroke-width='2' r='9' cy='12' cx='12'></circle>
                                        </g>
                                    </svg><span >  {$day}</span></div>
                               
                            </div>
                        </div>
                    
                    </div>
							

							";

                }

                ?>
            </div>

        </div>
    </div>
    <script src="static/js/main.js" type="text/javascript"></script>
    <script src="static/js/main2.js" type="text/javascript"></script>
    <script src="static/js/post.js" type="text/javascript"></script>
</body>

</html>