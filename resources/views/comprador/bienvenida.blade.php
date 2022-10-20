<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('login.navbar')
<nav id="navb" class="navbar" style="background-color:#151C2E;">
  <ul>
    <li class="lis"><div id="1">{{$comprador->vchNombre}}</div></li>
      <a  href="#"><li class="lis"><div id="1">Inicio</div></li></a>
      <a  href="{{route('comprador.edit',$comprador->intId)}}"><li class="lis"><div id="4">Editar perfil</div></li></a>
      <a  href="#"><li class="lis"><div id="6">FAQ</div></li></a>
      <a  href="#"><li class="lis"><div id="7">Cerrar sesion</div></li></a>
    <li class="lis">
     <div class="modo" style= "color: #fff">
         Modo nocturno:
         <!--<img src="http://localhost/Proyecto_Laravel/laravel/public/public/uploads/1.jpg" width="1%">-->
         <button class="cambiar btn btn-light"> Encender</button>
    </div>
</li>
  </ul>
</nav>

<center><br><br><br><br>
    <h1>Bienvenido a la seccion del comprador</h1>

<br><br>
        <div class="col-md-10">
                <img src="public/uploads/login.png" width="100"/>   
        </div>
    </center>


</body>
</html>
