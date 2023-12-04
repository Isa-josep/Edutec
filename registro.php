<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="static/style.css">
    <link href="static/css/bracket.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h2 class="t-center">Registro</h2>
        <!-- <div class="alert alert-danger" role="alert" id="lblmensaje">
        <strong class="d-block d-sm-inline-block-force">Error!</strong> Campos vacios.
      </div> -->
        <form action="registro.js">
            <div class="inputDiv">
                <label for="name" class="username"  >Nombre</label>
                <div class="userArea">
                    <i ></i><input type="text" id="UserName" name="UserName"
                        placeholder="Ingrese Nombre Y Apelldio">
                </div>
                <hr>
            </div>
            <div class="inputDiv">
                <label for="gmail" class="username"  >Correo</label>
                <div class="userArea">
                    <i ></i><input type="txt " id="UserGmail" name="UserGmail"
                        placeholder="Ingrese Correo Electronico">
                </div>
                <hr>
            </div>

            <div class="inputDiv">
                <label for="password" class="username"  >Contraseña</label>
                <div class="userArea">
                    <i ></i><input type="password" id="UserPassword" name="UserPassword"
                        placeholder="Ingrese Su Contraseña">
                </div>
                <hr>
            </div>

            <Label for="genero" class="username"  >Semestre</Label>
            <select style="width: 200px; height: 40px; font-size: 16px; background-color: #f8f9fa; border: 1px solid #ced4da; border-radius: 4px;">
                <option>1</option>
                <option>3</option>
                <option>5</option>
                <option>7</option>
                <option>9</option>
            </select>



            <button type="button"class="btn" id="btnregistro" name="btnregistro" >Registrate</button>
            <div class="formBottom">
                <p>O Registrate Con </p>
                <ul class="flexUl">
                    <a href="https://www.faceboook.com" target="_blank">
                        <li><i class="fa-brands fa-facebook-f"></i></li>
                    </a>
                    <a href="https://www.twitter.com" target="_blank">
                        <li><i class="fa-brands fa-twitter"></i></li>
                    </a>
                    <a href="https://www.google.com" target="_blank">
                        <li><i class="fa-brands fa-google"></i></li>
                    </a>
                </ul>
                <a href="index.html" target="_blank">¿Ya tienes cuentra? Accede</a>
            </div>
        </form>
    </div>
    <script src="static/lib/jquery/jquery.js"></script>
    <!-- <script src="static/lib/popper.js/popper.js"></script>
    <script src="static/lib/bootstrap/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.all.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="registro.js"></script>
</body>
</html>